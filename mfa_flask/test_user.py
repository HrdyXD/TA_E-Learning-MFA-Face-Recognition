import pymysql
import json
import numpy as np
from itertools import combinations

# ================= DATABASE CONFIG =================
DB_HOST = "localhost"
DB_USER = "root"
DB_PASSWORD = ""
DB_NAME = "moodle"


def get_db_connection():
    return pymysql.connect(
        host=DB_HOST,
        user=DB_USER,
        password=DB_PASSWORD,
        database=DB_NAME
    )


# ================= LOAD ALL EMBEDDINGS =================
conn = get_db_connection()
cursor = conn.cursor()

cursor.execute("SELECT username, embedding_data FROM mdl_mfa_facerecognition")
rows = cursor.fetchall()

conn.close()

print("=" * 70)
print("TOTAL USER:", len(rows))
print("=" * 70)

# ================= NORMALIZE EMBEDDINGS =================
embeddings = {}

for username, emb_json in rows:
    emb = np.array(json.loads(emb_json), dtype=np.float32)

    # Normalisasi
    emb = emb / np.linalg.norm(emb)

    embeddings[username] = emb


# ================= CEK SELF SIMILARITY =================
print("\nSELF CHECK")
print("=" * 70)

for username, emb in embeddings.items():
    similarity = np.dot(emb, emb)
    print(f"{username:<20} -> {similarity:.6f}")


# ================= CEK SEMUA PASANGAN USER =================
print("\nCROSS USER SIMILARITY")
print("=" * 70)

results = []

for user1, user2 in combinations(embeddings.keys(), 2):
    emb1 = embeddings[user1]
    emb2 = embeddings[user2]

    similarity = np.dot(emb1, emb2)
    euclidean_distance = np.linalg.norm(emb1 - emb2)

    results.append({
        "user1": user1,
        "user2": user2,
        "similarity": float(similarity),
        "distance": float(euclidean_distance)
    })


# ================= SORT BERDASARKAN SIMILARITY TERTINGGI =================
results = sorted(results, key=lambda x: x['similarity'], reverse=True)


# ================= TAMPILKAN HASIL =================
for r in results:
    print(
        f"{r['user1']:<20} vs {r['user2']:<20} | "
        f"Similarity: {r['similarity']:.6f} | "
        f"Distance: {r['distance']:.6f}"
    )


# ================= ANALISIS DISTRIBUSI =================
similarities = [r['similarity'] for r in results]

print("\n" + "=" * 70)
print("STATISTIK SIMILARITY")
print("=" * 70)

print(f"MAX SIMILARITY  : {np.max(similarities):.6f}")
print(f"MIN SIMILARITY  : {np.min(similarities):.6f}")
print(f"MEAN SIMILARITY : {np.mean(similarities):.6f}")
print(f"STD SIMILARITY  : {np.std(similarities):.6f}")


# ================= DETEKSI EMBEDDING COLLAPSE =================
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


# ================= TOP PASANGAN PALING MIRIP =================
print("\n" + "=" * 70)
print("TOP 10 PALING MIRIP")
print("=" * 70)

for r in results[:10]:
    print(
        f"{r['user1']:<20} vs {r['user2']:<20} | "
        f"Similarity: {r['similarity']:.6f}"
    )
