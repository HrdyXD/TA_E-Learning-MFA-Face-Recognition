import os
import cv2
import json
import pymysql
import numpy as np
from tensorflow.keras.models import load_model

# ================= DATABASE CONFIG =================
DB_HOST = "localhost"
DB_USER = "root"
DB_PASSWORD = ""
DB_NAME = "moodle"

# ================= DATASET PATH =================
DATASET_PATH = r"D:\HERDY\TUGAS KULIAH\SKRIPSI\CAPTURE DATASET\DATASET"

# ================= MODEL =================
MODEL_PATH = "embedding_model.keras"

# ================= CONFIG =================
IMG_SIZE = 224
MAX_IMAGES_PER_USER = 50

# ================= LOAD MODEL =================
print("LOAD MODEL...")
model = load_model(MODEL_PATH)

# ================= DATABASE =================
def get_db_connection():
    return pymysql.connect(
        host=DB_HOST,
        user=DB_USER,
        password=DB_PASSWORD,
        database=DB_NAME
    )

# ================= PREPROCESS =================
def preprocess_face(face_img):

    # resize langsung
    face_img = cv2.resize(face_img, (IMG_SIZE, IMG_SIZE))

    # BGR -> RGB
    face_img = cv2.cvtColor(face_img, cv2.COLOR_BGR2RGB)

    # normalisasi
    face_img = face_img.astype("float32") / 255.0

    return face_img

# ================= MAIN =================
def main():

    conn = get_db_connection()
    cursor = conn.cursor()

    print("=" * 60)
    print("MENGHAPUS SEMUA DATA LAMA...")
    print("=" * 60)

    cursor.execute("TRUNCATE TABLE mdl_mfa_facerecognition")
    conn.commit()

    total_user = 0

    # ================= LOOP USER =================
    for username in os.listdir(DATASET_PATH):

        user_folder = os.path.join(DATASET_PATH, username)

        if not os.path.isdir(user_folder):
            continue

        print("\n" + "=" * 60)
        print("PROCESS USER:", username)
        print("=" * 60)

        # ================= GET USER ID =================
        cursor.execute(
            "SELECT id FROM mdl_user WHERE username = %s",
            (username,)
        )

        user_row = cursor.fetchone()

        if not user_row:
            print("USER TIDAK DITEMUKAN:", username)
            continue

        user_id = user_row[0]

        # ================= GET IMAGE =================
        image_files = []

        for file in os.listdir(user_folder):

            ext = file.lower().split(".")[-1]

            if ext in ["jpg", "jpeg", "png"]:
                image_files.append(file)

        image_files.sort()

        selected_files = image_files[:MAX_IMAGES_PER_USER]

        print("TOTAL GAMBAR:", len(selected_files))

        all_embeddings = []

        # ================= PROCESS IMAGE =================
        for i, filename in enumerate(selected_files):

            file_path = os.path.join(user_folder, filename)

            try:

                frame = cv2.imread(file_path)

                if frame is None:
                    print("GAGAL BACA:", filename)
                    continue

                # LANGSUNG PAKAI IMAGE
                # TANPA HAAR CASCADE
                face_input = preprocess_face(frame)

                # embedding
                embedding = model.predict(
                    np.expand_dims(face_input, axis=0),
                    verbose=0
                )[0]

                # normalisasi
                embedding = embedding / np.linalg.norm(embedding)

                all_embeddings.append(embedding)

                print(f"[{i+1}] SUCCESS -> {filename}")

            except Exception as e:

                print("ERROR:", filename)
                print(str(e))

        # ================= VALIDASI =================
        if len(all_embeddings) == 0:

            print("TIDAK ADA EMBEDDING VALID")
            continue

        # ================= AVERAGE EMBEDDING =================
        avg_embedding = np.mean(all_embeddings, axis=0)

        avg_embedding = avg_embedding / np.linalg.norm(avg_embedding)

        # ================= SIMPAN 1 USER = 1 EMBEDDING =================
        cursor.execute(
            """
            INSERT INTO mdl_mfa_facerecognition
            (user_id, username, embedding_data)
            VALUES (%s, %s, %s)
            """,
            (
                user_id,
                username,
                json.dumps(avg_embedding.tolist())
            )
        )

        conn.commit()

        total_user += 1

        print("-" * 60)
        print("TOTAL EMBEDDING DIGABUNG:", len(all_embeddings))
        print("STATUS: BERHASIL DISIMPAN")

    conn.close()

    print("\n" + "=" * 60)
    print("SELESAI")
    print("=" * 60)
    print("TOTAL USER TERSIMPAN:", total_user)

# ================= RUN =================
if __name__ == "__main__":
    main()