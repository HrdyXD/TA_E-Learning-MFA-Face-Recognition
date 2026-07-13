import os
import cv2
import json
import pymysql
import numpy as np
from tensorflow.keras.models import load_model
from itertools import combinations

# ================= DATABASE CONFIG =================
DB_HOST = "localhost"
DB_USER = "root"
DB_PASSWORD = ""
DB_NAME = "moodle"

# ================= PATH CONFIG =================
DATASET_PATH = r"D:\HERDY\TUGAS KULIAH\SKRIPSI\CAPTURE DATASET\DATASET"
MODEL_PATH = "embedding_model.keras"

# ================= CONFIG =================
IMG_SIZE = 224
MAX_IMAGES_PER_USER = 50

# ================= LOAD DATABASE EMBEDDINGS =================
def get_db_connection():
    return pymysql.connect(
        host=DB_HOST,
        user=DB_USER,
        password=DB_PASSWORD,
        database=DB_NAME
    )

def load_db_embeddings():
    conn = get_db_connection()
    cursor = conn.cursor()
    cursor.execute("SELECT username, embedding_data FROM mdl_mfa_facerecognition")
    rows = cursor.fetchall()
    conn.close()

    db_embeddings = {}
    for username, emb_json in rows:
        emb = np.array(json.loads(emb_json), dtype=np.float32)
        db_embeddings[username] = emb / np.linalg.norm(emb)
    return db_embeddings

# ================= PREPROCESS IMAGE =================
def preprocess_face(face_img):
    face_img = cv2.resize(face_img, (IMG_SIZE, IMG_SIZE))
    face_img = cv2.cvtColor(face_img, cv2.COLOR_BGR2RGB)
    face_img = face_img.astype("float32") / 255.0
    return face_img

# ================= MAIN RUNNER =================
def main():
    # 1. Load Model & DB
    db_embeddings = load_db_embeddings()
    if not db_embeddings:
        print("Database kosong! Jalankan pendaftaran user terlebih dahulu.")
        return

    model = load_model(MODEL_PATH)
    
    dir_embeddings = {}
    
    # 2. Extract Embedding dari Setiap Folder di Direktori
    for username in os.listdir(DATASET_PATH):
        user_folder = os.path.join(DATASET_PATH, username)
        if not os.path.isdir(user_folder):
            continue
            
        image_files = [f for f in os.listdir(user_folder) if f.lower().endswith(('jpg', 'jpeg', 'png'))]
        selected_files = image_files[:MAX_IMAGES_PER_USER]
        
        user_imgs_embeddings = []
        for filename in selected_files:
            file_path = os.path.join(user_folder, filename)
            frame = cv2.imread(file_path)
            if frame is None:
                continue
                
            face_input = preprocess_face(frame)
            embedding = model.predict(np.expand_dims(face_input, axis=0), verbose=0)[0]
            embedding = embedding / np.linalg.norm(embedding)
            user_imgs_embeddings.append(embedding)
            
        if user_imgs_embeddings:
            # Ambil rata-rata representasi wajah dari direktori
            avg_dir_emb = np.mean(user_imgs_embeddings, axis=0)
            dir_embeddings[username] = avg_dir_emb / np.linalg.norm(avg_dir_emb)

    # Filter hanya user yang ada di kedua belah pihak (DB dan Direktori)
    valid_users = [u for u in dir_embeddings.keys() if u in db_embeddings]

    # ================= OUTPUT FORMATTED REPORT =================
    print("=" * 70)
    print(f"TOTAL USER: {len(valid_users)}")
    print("=" * 70)

    # 3. SELF CHECK (Direktori Gambar vs Database Akun yang Sama)
    print("\nSELF CHECK")
    print("=" * 70)
    for username in valid_users:
        emb_dir = dir_embeddings[username]
        emb_db = db_embeddings[username]
        similarity = np.dot(emb_dir, emb_db)
        print(f"{username:<20} -> {similarity:.6f}")

    # 4. CROSS USER SIMILARITY (Kombinasi Antar User Berbeda)
    print("\nCROSS USER SIMILARITY")
    print("=" * 70)
    
    results = []
    for user1, user2 in combinations(valid_users, 2):
        # Mengambil skor silang rata-rata (User 1 Dir vs User 2 DB & User 2 Dir vs User 1 DB)
        emb_dir1, emb_db1 = dir_embeddings[user1], db_embeddings[user1]
        emb_dir2, emb_db2 = dir_embeddings[user2], db_embeddings[user2]
        
        sim_a = np.dot(emb_dir1, emb_db2)
        sim_b = np.dot(emb_dir2, emb_db1)
        similarity = (sim_a + sim_b) / 2
        
        dist_a = np.linalg.norm(emb_dir1 - emb_db2)
        dist_b = np.linalg.norm(emb_dir2 - emb_db1)
        euclidean_distance = (dist_a + dist_b) / 2

        results.append({
            "user1": user1,
            "user2": user2,
            "similarity": float(similarity),
            "distance": float(euclidean_distance)
        })

    # Sort berdasarkan similarity tertinggi
    results = sorted(results, key=lambda x: x['similarity'], reverse=True)

    for r in results:
        print(
            f"{r['user1']:<20} vs {r['user2']:<20} | "
            f"Similarity: {r['similarity']:.6f} | "
            f"Distance: {r['distance']:.6f}"
        )

    # 5. STATISTIK SIMILARITY
    similarities = [r['similarity'] for r in results]
    print("\n" + "=" * 70)
    print("STATISTIK SIMILARITY")
    print("=" * 70)
    print(f"MAX SIMILARITY  : {np.max(similarities):.6f}")
    print(f"MIN SIMILARITY  : {np.min(similarities):.6f}")
    print(f"MEAN SIMILARITY : {np.mean(similarities):.6f}")
    print(f"STD SIMILARITY  : {np.std(similarities):.6f}")

    # 6. ANALISIS
    print("\n" + "=" * 70)
    print("ANALISIS")
    print("=" * 70)
    mean_sim = np.mean(similarities)
    if mean_sim > 0.90:
        print("WARNING: Embedding kemungkinan collapse.")
        print("Rata-rata similarity antar user terlalu tinggi.")
        print("Model kemungkinan gagal membedakan identitas wajah.")
    elif mean_sim > 0.75:
        print("Similarity antar user masih cukup tinggi.")
        print("Threshold harus sangat ketat.")
    else:
        print("Embedding terlihat cukup terpisah.")

    # 7. TOP 10 PALING MIRIP
    print("\n" + "=" * 70)
    print("TOP 10 PALING MIRIP")
    print("=" * 70)
    for r in results[:10]:
        print(f"{r['user1']:<20} vs {r['user2']:<20} | Similarity: {r['similarity']:.6f}")

if __name__ == "__main__":
    main()