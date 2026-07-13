# E-Learning MFA Face Recognition

Sistem E-Learning berbasis **Moodle 4.5** yang dikembangkan dengan mekanisme **Multi-Factor Authentication (MFA)** berbasis *face recognition*. Sistem menerapkan dua tahap autentikasi, yaitu **username dan password** sebagai faktor pertama serta **verifikasi wajah** sebagai faktor kedua.

Sistem menggunakan **PHP** untuk pengembangan dan integrasi pada Moodle, sedangkan **Python** digunakan untuk pemrosesan biometrik wajah. **TensorFlow** digunakan untuk menjalankan model CNN dengan arsitektur **VGG16** sebagai *feature extractor*, **OpenCV** untuk pemrosesan citra wajah, **Flask** sebagai layanan autentikasi wajah, dan **MySQL** sebagai basis data.

## Teknologi yang Digunakan

* Moodle 4.5
* PHP ≥ 8.1
* Python ≥ 3.10
* TensorFlow 2.x
* OpenCV
* Flask
* NumPy
* PyMySQL
* MySQL ≥ 8.0 atau MariaDB ≥ 10.6
* Apache Web Server

## Instalasi

### 1. Clone Repository

```bash id="95kw1p"
git clone https://github.com/HrdyXD/TA_E-Learning-MFA-Face-Recognition.git
```

### 2. Pindahkan Folder Moodle

Pindahkan folder `moodle` ke dalam direktori XAMPP:

```text id="z5i4d7"
C:\xampp\htdocs\moodle
```

### 3. Pindahkan Folder Moodledata

Pindahkan folder `moodledata` ke direktori:

```text id="fx8a3v"
C:\xampp\moodledata
```

Sehingga folder `moodledata` berada di luar direktori `htdocs`.

### 4. Import Database

Database telah disediakan pada:

```text id="38isql"
database/moodle.sql
```

Jalankan **Apache** dan **MySQL** melalui XAMPP, kemudian:

1. Buka `http://localhost/phpmyadmin`.
2. Buat database baru.
3. Pilih menu **Import**.
4. Pilih file `database/moodle.sql`.
5. Jalankan proses import.

### 5. Install Library Python

Masuk ke folder Flask:

```bash id="fn2t1h"
cd mfa_flask
```

Install library yang diperlukan:

```bash id="02cr6d"
pip install -r requirements.txt
```

Library utama yang digunakan:

```text id="sv8l7q"
Flask
opencv-python
numpy
PyMySQL
tensorflow
```

### 6. Jalankan Aplikasi Flask

```bash id="x1y8qt"
python app.py
```

Aplikasi Flask berjalan pada port `5000`.

### 7. Jalankan Sistem

Pastikan **Apache**, **MySQL**, dan aplikasi **Flask** telah berjalan. Kemudian akses E-Learning melalui:

```text id="6pc8jd"
http://localhost/moodle
```

## Alur Penggunaan

**Pengguna Baru:**

```text id="7lgj9c"
Registrasi Akun → Login → Registrasi Wajah → Login Ulang → Verifikasi Wajah → E-Learning
```

**Pengguna Terdaftar:**

```text id="5d3r9k"
Login → Verifikasi Wajah → E-Learning
```

## Struktur Proyek

```text id="p3kx7z"
TA_E-Learning-MFA-Face-Recognition/
├── database/
│   └── moodle.sql
├── mfa_flask/
│   ├── app.py
│   └── embedding_model.keras
├── moodle/
├── moodledata/
├── requirements.txt
└── README.md
```

## Pengembang

**I Putu Herdy Juniawan**

Dikembangkan sebagai bagian dari Tugas Akhir mengenai implementasi **Face Recognition menggunakan metode CNN dan Multi-Factor Authentication untuk meningkatkan keamanan login pada E-Learning**.
