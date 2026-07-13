from flask import Flask, redirect, request, render_template, session, jsonify
import cv2
import numpy as np
from tensorflow.keras.models import load_model
import secrets
import time
import base64
import pymysql
import json

app = Flask(__name__)
app.secret_key = secrets.token_hex(32)

# ================= SECURITY CONFIG =================
app.config['SESSION_COOKIE_HTTPONLY'] = True
app.config['SESSION_COOKIE_SECURE'] = False
app.config['SESSION_COOKIE_SAMESITE'] = 'Strict'
app.config['MAX_CONTENT_LENGTH'] = 15 * 1024 * 1024  # Batas ditingkatkan untuk upload burst

# ================= DATABASE CONFIG =================
DB_HOST = "localhost"
DB_USER = "root"
DB_PASSWORD = ""
DB_NAME = "moodle"

def get_db_connection():
    return pymysql.connect(
        host=DB_HOST, user=DB_USER, password=DB_PASSWORD, database=DB_NAME
    )

# Load CNN model
model = load_model("embedding_model.keras")

USER_MAPPING = {"admin": "2208561033"}
IMG_SIZE = 224
SIMILARITY_THRESHOLD = 0.85 # Diperketat agar tidak bocor ke wajah lain
LOGIN_SESSION_TIMEOUT = 60 # 1 menit untuk proses verifikasi login
REGISTER_SESSION_TIMEOUT = 300 # 5 menit untuk proses registrasi wajah

# ================= FACE DETECTION MODELS =================
face_cascade_frontal = cv2.CascadeClassifier(cv2.data.haarcascades + "haarcascade_frontalface_default.xml")
face_cascade_profile = cv2.CascadeClassifier(cv2.data.haarcascades + "haarcascade_profileface.xml")

def detect_all_faces(frame):
    """
    Fungsi untuk mendeteksi wajah menghadap depan, kiri, atau kanan.
    Mengembalikan list bounding box wajah.
    """
    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
    
    # 1. Cek wajah depan
    faces = face_cascade_frontal.detectMultiScale(gray, 1.2, 4, minSize=(60,60))
    if len(faces) > 0: return faces
    
    # 2. Cek wajah menghadap kiri
    faces = face_cascade_profile.detectMultiScale(gray, 1.2, 4, minSize=(60,60))
    if len(faces) > 0: return faces
    
    # 3. Cek wajah menghadap kanan (dengan membalik gambar secara horizontal)
    gray_flipped = cv2.flip(gray, 1)
    faces_flipped = face_cascade_profile.detectMultiScale(gray_flipped, 1.2, 4, minSize=(60,60))
    
    if len(faces_flipped) > 0:
        # Konversi koordinat X agar sesuai dengan gambar asli (belum di-flip)
        img_width = gray.shape[1]
        faces_corrected = []
        for (x, y, w, h) in faces_flipped:
            faces_corrected.append([img_width - (x + w), y, w, h])
        return faces_corrected
        
    return []

def process_base64_image(img_b64):
    header, encoded = img_b64.split(",", 1)
    data = base64.b64decode(encoded)
    npimg = np.frombuffer(data, np.uint8)
    return cv2.imdecode(npimg, cv2.IMREAD_COLOR)

# ================= ROUTES =================

@app.after_request
def add_security_headers(response):
    response.headers['X-Content-Type-Options'] = 'nosniff'
    response.headers['X-Frame-Options'] = 'SAMEORIGIN'
    response.headers['X-XSS-Protection'] = '1; mode=block'
    return response

@app.route("/", methods=["GET", "POST"])
def index():
    if request.method == "GET":
        return render_template("session_error.html")

    user_input = request.form.get("user")
    if not user_input: return "Invalid MFA request"
    target_username = USER_MAPPING.get(user_input, user_input)

    conn = get_db_connection()
    cursor = conn.cursor()
    cursor.execute("SELECT username FROM mdl_mfa_facerecognition WHERE username = %s", (target_username,))
    result = cursor.fetchone()
    conn.close()

    if not result:
        session['new_user_to_register'] = target_username
        return redirect("/register_page")

    session.clear()
    session["user"] = user_input
    session["face_label"] = target_username
    session["token"] = secrets.token_urlsafe(32)
    session["time"] = time.time()
    session["match_start"] = None
    return render_template("camera.html")

@app.route("/register_page")
def register_page():
    username = session.get('new_user_to_register')
    if not username:
        return render_template("session_error.html")
    session["time"] = time.time() # Mulai timer untuk pendaftaran
    return render_template("register.html", username=username)

@app.route("/check_face", methods=["POST"])
def check_face():
    if time.time() - session.get("time", time.time()) > REGISTER_SESSION_TIMEOUT:
        reg_username = session.get('new_user_to_register')
        if reg_username:
            conn = get_db_connection()
            cursor = conn.cursor()
            cursor.execute("SELECT id FROM mdl_user WHERE username = %s", (reg_username,))
            user_row = cursor.fetchone()
            if user_row:
                cursor.execute("INSERT INTO mdl_mfa_face_registration_logs (user_id, status) VALUES (%s, 'failed')", (user_row[0],))
                conn.commit()
            conn.close()
        session.clear()
        return jsonify({"status": "timeout", "redirect": "/expired"})
        
    data = request.get_json()
    try:
        frame = process_base64_image(data.get("image"))
        faces = detect_all_faces(frame)
        return jsonify({"has_face": len(faces) > 0})
    except:
        return jsonify({"has_face": False})

@app.route("/register_face", methods=["POST"])
def register_face():
    conn = get_db_connection()
    cursor = conn.cursor()

    if time.time() - session.get("time", time.time()) > REGISTER_SESSION_TIMEOUT:
        reg_username = session.get('new_user_to_register')
        if reg_username:
            cursor.execute("SELECT id FROM mdl_user WHERE username = %s", (reg_username,))
            user_row = cursor.fetchone()
            if user_row:
                cursor.execute("INSERT INTO mdl_mfa_face_registration_logs (user_id, status) VALUES (%s, 'failed')", (user_row[0],))
                conn.commit()
        conn.close()
        session.clear()
        return jsonify({"status": "error", "message": "Waktu registrasi habis. Silakan muat ulang halaman."})

    data_json = request.get_json()
    reg_username = data_json.get("username")
    images = data_json.get("images") # Array 50 gambar

    if not images:
        conn.close()
        return jsonify({"status": "error", "message": "Data kosong"})

    # Ambil user_id dari Moodle terlebih dahulu
    cursor.execute("SELECT id FROM mdl_user WHERE username = %s", (reg_username,))
    user_row = cursor.fetchone()
    if not user_row:
        conn.close()
        return jsonify({"status": "error", "message": "User Moodle tidak ditemukan"})
        
    user_id = user_row[0]

    all_embeddings = []
    try:
        for img_b64 in images:
            frame = process_base64_image(img_b64)
            faces = detect_all_faces(frame)
            
            if len(faces) > 0:
                x, y, w, h = faces[0]
                face_img = cv2.resize(cv2.cvtColor(frame[y:y+h, x:x+w], cv2.COLOR_BGR2RGB), (IMG_SIZE, IMG_SIZE)) / 255.0
                embedding = model.predict(np.expand_dims(face_img, axis=0), verbose=0)[0]
                all_embeddings.append(embedding)

        if len(all_embeddings) < 45:
            cursor.execute("INSERT INTO mdl_mfa_face_registration_logs (user_id, status) VALUES (%s, 'failed')", (user_id,))
            conn.commit()
            conn.close()
            return jsonify({"status": "error", "message": "Kualitas wajah buruk, silakan ulangi"})

        # Hitung Rata-rata Vektor (Centroid)
        avg_embedding = np.mean(all_embeddings, axis=0)
        # Normalisasi (Penting!)
        avg_embedding = avg_embedding / np.linalg.norm(avg_embedding)

        cursor.execute("""
            INSERT INTO mdl_mfa_facerecognition (user_id, username, embedding_data) VALUES (%s, %s, %s)
            ON DUPLICATE KEY UPDATE embedding_data = VALUES(embedding_data)
        """, (user_id, reg_username, json.dumps(avg_embedding.tolist())))
        
        cursor.execute("INSERT INTO mdl_mfa_face_registration_logs (user_id, status) VALUES (%s, 'success')", (user_id,))
        conn.commit()
        conn.close()
        return jsonify({"status": "success"})
    except Exception as e:
        cursor.execute("INSERT INTO mdl_mfa_face_registration_logs (user_id, status) VALUES (%s, 'failed')", (user_id,))
        conn.commit()
        conn.close()
        return jsonify({"status": "error", "message": str(e)})

@app.route("/scan", methods=["POST"])
def scan():
    if "user" not in session: return jsonify({"status": "error", "redirect": "/"})

    if time.time() - session.get("time", time.time()) > LOGIN_SESSION_TIMEOUT:
        # CATAT LOG FAILED KETIKA TIMEOUT PENCARIAN
        target_username = session.get("face_label")
        if target_username:
            conn = get_db_connection()
            cursor = conn.cursor()
            cursor.execute("SELECT user_id FROM mdl_mfa_facerecognition WHERE username = %s", (target_username,))
            res = cursor.fetchone()
            if res:
                client_ip = request.headers.get('X-Forwarded-For', request.remote_addr)
                cursor.execute("""
                    INSERT INTO mdl_mfa_verification_logs (user_id, mfa_status, confidence_score, ip_address) 
                    VALUES (%s, 'failed', %s, %s)
                """, (res[0], 0.0, client_ip))
            conn.commit()
            conn.close()
            
        session.clear()
        return jsonify({"status": "timeout", "redirect": "/expired"})
    
    img_b64 = request.form.get("image")
    try:
        frame = process_base64_image(img_b64)
        faces = detect_all_faces(frame)
    except: return jsonify({"status": "error"}), 400

    if len(faces) == 0:
        session["match_start"] = None
        return jsonify({"status": "no_face"})

    x, y, w, h = faces[0]
    face_crop = cv2.resize(cv2.cvtColor(frame[y:y+h, x:x+w], cv2.COLOR_BGR2RGB), (IMG_SIZE, IMG_SIZE)) / 255.0
    live_emb = model.predict(np.expand_dims(face_crop, axis=0), verbose=0)[0]

    conn = get_db_connection()
    cursor = conn.cursor()
    cursor.execute("SELECT user_id, embedding_data FROM mdl_mfa_facerecognition WHERE username = %s", (session["face_label"],))
    db_val = cursor.fetchone()

    if not db_val:
        conn.close()
        return jsonify({"status": "error"})

    user_id = db_val[0]
    db_emb = np.array(json.loads(db_val[1]))
    similarity = np.dot(live_emb, db_emb) / (np.linalg.norm(live_emb) * np.linalg.norm(db_emb))

    if similarity > SIMILARITY_THRESHOLD:
        if session.get("match_start") is None:
            session["match_start"] = time.time()
            duration = 0
        else:
            duration = time.time() - session["match_start"]

        if duration >= 1.0:
            token = session["token"]
            session.clear()
            
            # CATAT LOG SUCCESS (VERIFIKASI BERHASIL)
            client_ip = request.headers.get('X-Forwarded-For', request.remote_addr)
            cursor.execute("""
                INSERT INTO mdl_mfa_verification_logs (user_id, mfa_status, confidence_score, ip_address) 
                VALUES (%s, 'success', %s, %s)
            """, (user_id, float(similarity), client_ip))
            conn.commit()
            conn.close()
            return jsonify({"status": "success", "redirect": f"http://localhost/moodle/mfa_success.php?token={token}"})
        
        conn.close()
        return jsonify({"status": "matching", "duration": round(duration, 1), "confidence": round(float(similarity), 2)})

    session["match_start"] = None
    conn.close()
    return jsonify({"status": "not_match", "confidence": round(float(similarity), 2)})

@app.route("/retry")
def retry(): return render_template("camera.html") if "user" in session else render_template("session_error.html")

@app.route("/expired")
def expired():
    return render_template("expired.html")

if __name__ == "__main__":
    app.run(host='localhost', port=5000, debug=False)

    