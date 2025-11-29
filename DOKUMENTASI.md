# DOKUMENTASI APLIKASI CATATAN HARIAN (DIARY)

## 1. Deskripsi Aplikasi

Aplikasi Catatan Harian (Diary) adalah aplikasi berbasis web yang
digunakan untuk mengelola catatan harian pengguna. Aplikasi ini dibangun
menggunakan Laravel dan template AdminLTE sebagai tampilan antarmuka
admin.

Fitur utama aplikasi meliputi: - Autentikasi pengguna (Login, Logout,
Ganti Password) - Manajemen Kategori Catatan (CRUD) - Manajemen Catatan
Harian (CRUD) - Dashboard Statistik - Halaman Profil Pengguna

## 2. Teknologi yang Digunakan

-   Bahasa Pemrograman: PHP
-   Framework: Laravel
-   Database: MySQL
-   Template Admin: AdminLTE
-   Chart / Grafik: Chart.js
-   Server Lokal: XAMPP / Laragon

## 3. Struktur Folder Utama

-   app/Http/Controllers/Admin\
    Berisi controller untuk dashboard, catatan, kategori, dan profil.
-   app/Models\
    Berisi model Catatan dan Kategori.
-   resources/views/admin\
    Berisi semua tampilan halaman admin.
-   routes/web.php\
    Berisi seluruh routing aplikasi.
-   database/migrations\
    Berisi struktur tabel database.

## 4. Fitur Aplikasi

### 4.1 Autentikasi

-   Login
-   Logout
-   Ganti Password

### 4.2 Dashboard

-   Menampilkan total jumlah catatan
-   Menampilkan grafik jumlah catatan per kategori

### 4.3 Manajemen Kategori

-   Tambah kategori
-   Edit kategori
-   Hapus kategori

### 4.4 Manajemen Catatan

-   Tambah catatan
-   Edit catatan
-   Hapus catatan
-   Catatan terhubung dengan kategori

### 4.5 Profil Pengguna

-   Menampilkan nama dan email pengguna
-   Menampilkan tanggal pembuatan akun
-   Akses ke fitur ganti password

## 5. Struktur Database

### 5.1 Tabel users

-   id
-   name
-   email
-   password
-   created_at
-   updated_at

### 5.2 Tabel kategoris

-   id
-   kode
-   nama
-   created_at
-   updated_at

### 5.3 Tabel catatans

-   id
-   kode
-   judul
-   isi
-   kategori (foreign key ke tabel kategoris)
-   tanggal
-   created_at
-   updated_at

## 6. Cara Menjalankan Aplikasi

1.  Clone atau salin project ke folder:

    -   XAMPP: htdocs
    -   Laragon: www
    -   Atau folder penempatan yang diinginkan

2.  Install dependency: composer install

3.  Atur koneksi database di file .env

4.  Jalankan migrate database: php artisan migrate

5.  Jalankan server: php artisan serve

6.  Akses di browser: http://127.0.0.1:8000

## 7. Hak Akses

-   Admin dapat mengelola kategori dan catatan
-   Admin dapat melihat dashboard dan profil
