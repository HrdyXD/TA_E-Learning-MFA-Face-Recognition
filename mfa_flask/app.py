# ================= IMPORT LIBRARY =================

from flask import (
    Flask,
    redirect,
    request,
    render_template,
    session,
    jsonify
)

import cv2
import numpy as np
import base64
import secrets
import time
import json
import os
import pymysql

from tensorflow.keras.models import load_model


# ================= INISIALISASI FLASK =================

app = Flask(__name__)
# Menggunakan secret key yang konsisten agar session tidak hancur saat server restart otomatis
app.secret_key = "KUNCI_RAHASIA_MFA_UDAYANA_INFORMATIKA_VGG16"


# ================= SECURITY CONFIG =================

app.config['SESSION_COOKIE_HTTPONLY'] = True
app.config['SESSION_COOKIE_SECURE'] = False
app.config['SESSION_COOKIE_SAMESITE'] = 'Lax'
# Kapasitas payload dinaikkan untuk mengakomodasi pengiriman 50 base64 images
app.config['MAX_CONTENT_LENGTH'] = 50 * 1024 * 1024 


# ================= DATABASE CONFIG =================

DB_HOST = "localhost"
DB_USER = "root"
DB_PASSWORD = ""
DB_NAME = "moodle"


def get_db_connection():
    """
    Membuat koneksi ke database MySQL
    """
    return pymysql.connect(
        host=DB_HOST,
        user=DB_USER,
        password=DB_PASSWORD,
        database=DB_NAME
    )


# ================= MODEL CONFIG =================

MODEL_PATH = "embedding_model.keras"

model = None
if os.path.exists(MODEL_PATH):
    try:
        model = load_model(MODEL_PATH)
        print("====== MODEL VGG16 BERHASIL DIMUAT ======")
        print(f"Output Shape Model Anda: {model.output_shape}")
    except Exception as e:
        print(f"Error saat memuat model: {str(e)}")
else:
    print(f"Error: {MODEL_PATH} tidak ditemukan!")


# Mapping username Moodle
USER_MAPPING = {
    "admin": "2208561033"
}

# Konfigurasi model
IMG_SIZE = 224

# === PERBAIKAN & PENYESUAIAN THRESHOLD ===
SIMILARITY_THRESHOLD = 0.92

# Session timeout
LOGIN_SESSION_TIMEOUT = 60
REGISTER_SESSION_TIMEOUT = 300


# ================= FACE DETECTION CONFIG =================

face_cascade_frontal = cv2.CascadeClassifier(
    cv2.data.haarcascades + "haarcascade_frontalface_default.xml"
)

face_cascade_profile = cv2.CascadeClassifier(
    cv2.data.haarcascades + "haarcascade_profileface.xml"
)


# ================= METRIC LEARNING / SIMILARITY FUNCTION =================

def calculate_cosine_similarity(vector_a, vector_b):
    """
    Menghitung Cosine Similarity secara matematis yang valid.
    """
    dot_product = np.dot(vector_a, vector_b)
    norm_a = np.linalg.norm(vector_a)
    norm_b = np.linalg.norm(vector_b)
    
    if norm_a == 0 or norm_b == 0:
        return 0.0
        
    return float(dot_product / (norm_a * norm_b))


# ================= FACE DETECTION FUNCTION =================

def detect_all_faces(frame):
    """
    Mendeteksi wajah: Frontal, Profile kiri, Profile kanan
    """
    if frame is None:
        return []

    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

    # ===== 1. DETEKSI WAJAH FRONTAL =====
    faces = face_cascade_frontal.detectMultiScale(
        gray, 1.2, 5, minSize=(80, 80)
    )
    if len(faces) > 0:
        return faces

    # ===== 2. DETEKSI PROFILE KIRI =====
    faces = face_cascade_profile.detectMultiScale(
        gray, 1.2, 5, minSize=(80, 80)
    )
    if len(faces) > 0:
        return faces

    # ===== 3. DETEKSI PROFILE KANAN =====
    gray_flipped = cv2.flip(gray, 1)
    faces_flipped = face_cascade_profile.detectMultiScale(
        gray_flipped, 1.2, 5, minSize=(80, 80)
    )

    if len(faces_flipped) > 0:
        img_width = gray.shape[1]
        return [
            [img_width - (x + w), y, w, h]
            for (x, y, w, h) in faces_flipped
        ]

    return []


# ================= IMAGE PROCESSING FUNCTION =================

def process_base64_image(img_b64):
    """
    Mengubah gambar base64 menjadi format OpenCV
    """
    if not img_b64 or "," not in img_b64:
        return None

    try:
        header, encoded = img_b64.split(",", 1)
        data = base64.b64decode(encoded)
        npimg = np.frombuffer(data, np.uint8)
        return cv2.imdecode(npimg, cv2.IMREAD_COLOR)
    except:
        return None


# ================= EMBEDDING FUNCTION =================

def get_embedding(face_pixels):
    """
    Menghasilkan embedding wajah menggunakan model CNN VGG16
    """
    if model is None:
        raise RuntimeError("Model Keras tidak dimuat dengan benar.")

    # Resize image sesuai dengan input VGG16
    face_pixels = cv2.resize(
        cv2.cvtColor(face_pixels, cv2.COLOR_BGR2RGB),
        (IMG_SIZE, IMG_SIZE)
    )

    # Normalisasi skala piksel [0, 1]
    face_pixels = face_pixels.astype('float32') / 255.0

    # Prediksi embedding / ekstraksi fitur
    embedding = model.predict(
        np.expand_dims(face_pixels, axis=0),
        verbose=0
    )[0]

    # Meratakan dimensi jika output berbentuk (1, 1, Feature_Size)
    embedding = embedding.flatten()

    # Normalisasi
    embedding = embedding / np.linalg.norm(embedding)

    return embedding


# ================= SECURITY HEADER =================

@app.after_request
def add_security_headers(response):
    response.headers['X-Content-Type-Options'] = 'nosniff'
    response.headers['X-Frame-Options'] = 'SAMEORIGIN'
    response.headers['X-XSS-Protection'] = '1; mode=block'
    return response


# ================= ROUTES =================

@app.route("/", methods=["GET", "POST"])
def index():
    if request.method == "GET":
        return render_template("session_error.html")

    user_input = request.form.get("user")
    if not user_input:
        return "Invalid MFA request"

    target_username = USER_MAPPING.get(user_input, user_input)

    conn = get_db_connection()
    cursor = conn.cursor()

    try:
        cursor.execute(
            """
            SELECT username
            FROM mdl_mfa_facerecognition
            WHERE username = %s
            """,
            (target_username,)
        )
        result = cursor.fetchone()
    finally:
        conn.close()

    if not result:
        session['new_user_to_register'] = target_username
        session["time"] = time.time()
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

    session["time"] = time.time()
    return render_template("register.html", username=username)


@app.route("/register_face", methods=["POST"])
def register_face():
    data_json = request.get_json()
    if not data_json:
        return jsonify({"status": "error", "message": "Invalid JSON data."})

    reg_username = data_json.get("username")
    images = data_json.get("images")

    # Validasi awal: Memastikan ada payload gambar yang dikirim
    if not images or len(images) == 0:
        return jsonify({
            "status": "error",
            "message": "Data wajah tidak ditemukan."
        })

    conn = get_db_connection()
    cursor = conn.cursor()

    try:
        cursor.execute(
            "SELECT id FROM mdl_user WHERE username = %s",
            (reg_username,)
        )
        user_row = cursor.fetchone()

        if not user_row:
            return jsonify({"status": "error", "message": "User Moodle tidak ditemukan."})

        user_id = user_row[0]
        all_embeddings = []

        # ================= PROCESS SEMUA IMAGE YANG DIKIRIM =================
        for img_b64 in images:
            frame = process_base64_image(img_b64)
            if frame is None:
                continue

            # Gunakan Haar Cascade untuk deteksi dan cropping
            faces = detect_all_faces(frame)

            if len(faces) > 0:
                x, y, w, h = faces[0]
                face_crop = frame[y:y+h, x:x+w]
                
                # Ekstraksi fitur menggunakan VGG16
                emb = get_embedding(face_crop)
                all_embeddings.append(emb)

        # Validasi: Jika terlalu banyak wajah yang gagal di-crop/deteksi
        # Kamu bisa mengatur minimal frame di sini (misalnya minimal 10 embedding berhasil dari 50 frame)
        if len(all_embeddings) == 0:
            return jsonify({
                "status": "error",
                "message": "Tidak ada wajah valid yang berhasil di-crop dan dideteksi."
            })

        # ================= AVERAGE EMBEDDING =================
        avg_embedding = np.mean(all_embeddings, axis=0)
        avg_embedding = avg_embedding / np.linalg.norm(avg_embedding)

        # ================= SIMPAN 1 USER = 1 EMBEDDING =================
        cursor.execute(
            """
            INSERT INTO mdl_mfa_facerecognition (user_id, username, embedding_data)
            VALUES (%s, %s, %s)
            ON DUPLICATE KEY UPDATE embedding_data = VALUES(embedding_data)
            """,
            (user_id, reg_username, json.dumps(avg_embedding.tolist()))
        )
        conn.commit()
        
        return jsonify({
            "status": "success",
            "processed_frames": len(all_embeddings) # Mengirim kembali total wajah yang sukses diproses
        })

    except Exception as e:
        return jsonify({"status": "error", "message": str(e)})
    finally:
        conn.close()


@app.route("/scan", methods=["POST"])
def scan():
    if "user" not in session:
        return jsonify({"status": "error", "redirect": "/"})

    if time.time() - session.get("time", 0) > LOGIN_SESSION_TIMEOUT:
        session.clear()
        return jsonify({"status": "timeout", "redirect": "/expired"})

    img_b64 = request.form.get("image")
    frame = process_base64_image(img_b64)
    faces = detect_all_faces(frame)

    if len(faces) == 0:
        session["match_start"] = None
        return jsonify({"status": "no_face"})

    x, y, w, h = faces[0]
    face_crop = frame[y:y+h, x:x+w]

    try:
        live_emb = get_embedding(face_crop)
    except Exception as e:
        return jsonify({"status": "error", "message": str(e)})

    conn = get_db_connection()
    cursor = conn.cursor()

    try:
        cursor.execute(
            "SELECT user_id, embedding_data FROM mdl_mfa_facerecognition WHERE username = %s",
            (session["face_label"],)
        )
        db_val = cursor.fetchone()

        if not db_val:
            return jsonify({"status": "error", "message": "Data wajah tidak ditemukan di DB."})

        user_id, db_emb_raw = db_val
        db_emb = np.array(json.loads(db_emb_raw))

        similarity = calculate_cosine_similarity(live_emb, db_emb)

        print(f"\n[MFA DEBUG LOG] Target Akun: {session['face_label']}")
        print(f"[MFA DEBUG LOG] Nilai Confidence Match Tertinggi: {similarity:.4f}")
        print(f"[MFA DEBUG LOG] Threshold Saat Ini: {SIMILARITY_THRESHOLD}")
        print(f"[MFA DEBUG LOG] Status Kelulusan: {'LOLOS' if similarity > SIMILARITY_THRESHOLD else 'DITOLAK'}\n")

        if similarity > SIMILARITY_THRESHOLD:
            if session.get("match_start") is None:
                session["match_start"] = time.time()
                duration = 0
            else:
                duration = time.time() - session["match_start"]

            if duration >= 3.0:
                token = session["token"]
                client_ip = request.headers.get('X-Forwarded-For', request.remote_addr)

                cursor.execute(
                    """
                    INSERT INTO mdl_mfa_verification_logs (user_id, mfa_status, confidence_score, ip_address)
                    VALUES (%s, 'success', %s, %s)
                    """,
                    (user_id, float(similarity), client_ip)
                )
                conn.commit()
                session.clear()

                return jsonify({
                    "status": "success",
                    "redirect": f"http://192.168.101.8/moodle-2/mfa_success.php?token={token}"
                })

            return jsonify({
                "status": "matching",
                "duration": round(duration, 1),
                "confidence": round(float(similarity), 3)
            })

        session["match_start"] = None
        return jsonify({
            "status": "not_match",
            "confidence": round(float(similarity), 3)
        })

    except Exception as e:
        return jsonify({"status": "error", "message": str(e)})
    finally:
        conn.close()


@app.route("/check_face", methods=["POST"])
def check_face():
    data = request.get_json()
    if not data or "image" not in data:
        return jsonify({"has_face": False})

    try:
        frame = process_base64_image(data.get("image"))
        faces = detect_all_faces(frame)
        return jsonify({"has_face": len(faces) > 0})
    except:
        return jsonify({"has_face": False})


@app.route("/expired")
def expired():
    session.clear()
    return render_template("expired.html")


if __name__ == "__main__":
    ssl_ctx = ('server.crt', 'server.key') if os.path.exists('server.crt') and os.path.exists('server.key') else None
    if ssl_ctx is None:
        print("Warning: SSL certificate tidak ditemukan, berjalan di HTTP biasa.")

    app.run(
        host='0.0.0.0',
        port=5000,
        ssl_context=ssl_ctx
    )

    