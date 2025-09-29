# College Web Sister - Sistem Informasi Akademik

Sebuah aplikasi web Sistem Informasi Akademik (SIA) sederhana yang dibangun menggunakan PHP native dengan menerapkan pola arsitektur Model-View-Controller (MVC). Aplikasi ini memungkinkan pengelolaan data mahasiswa, dosen, mata kuliah, dan data perkuliahan.

## Fitur Utama

* **Autentikasi Pengguna**: Sistem pendaftaran dan login untuk pengguna.
* **Manajemen Data Mahasiswa (CRUD)**: Tambah, lihat, edit, dan hapus data mahasiswa.
* **Manajemen Data Dosen (CRUD)**: Tambah, lihat, edit, dan hapus data dosen.
* **Manajemen Data Mata Kuliah (CRUD)**: Tambah, lihat, edit, dan hapus data mata kuliah.
* **Manajemen Data Perkuliahan (CRUD)**: Tambah, lihat, edit, dan hapus data perkuliahan yang menghubungkan mahasiswa, dosen, dan mata kuliah.
* **Filter Data**: Fitur penyaringan data pada halaman perkuliahan untuk memudahkan pencarian.
* **Desain Responsif**: Antarmuka yang dapat menyesuaikan dengan berbagai ukuran layar menggunakan Tailwind CSS.

## Teknologi yang Digunakan

* **Backend**: PHP Native
* **Frontend**: Tailwind CSS
* **Database**: PostgreSQL (Supabase) & MySQL
* **Web Server**: Apache

## Prasyarat

* PHP 7.4 atau lebih tinggi
* Web Server (misalnya Apache, Nginx)
* Database Server (MySQL atau PostgreSQL)
* Composer (opsional, jika ada dependensi)

## Instalasi dan Konfigurasi

Berikut adalah langkah-langkah untuk menjalankan proyek ini secara lokal.

### 1. Kloning Repositori

```bash
git clone https://github.com/RifqiMakarim/College-Web-Sister.git
cd <nama-folder-proyek>
```
### 2. Konfigurasi Database

Buka file `config/database.php` dan sesuaikan koneksi database Anda. Anda bisa memilih untuk menggunakan MySQL atau PostgreSQL (Supabase).

* **Opsi 1: Menggunakan PostgreSQL (Supabase)**

    Pastikan konfigurasi ini tidak diberi komentar dan isi detail koneksi Supabase Anda.

    ```php
    // config/database.php

    // Untuk PostgreSQL ( Supabase )
    private $host = "aws-1-ap-southeast-1.pooler.supabase.com"; //Host Supabase
    private $db_name = "postgres";
    private $username = "postgres.dzcnfiqnhzofomumbyri";
    private $password = "Sister@12345"; //  password
    private $port = "5432";
    public $conn;
    ```

* **Opsi 2: Menggunakan MySQL Lokal**

    Beri komentar pada bagian koneksi PostgreSQL dan hapus komentar pada bagian MySQL. Sesuaikan dengan konfigurasi database lokal Anda.

    ```php
    // config/database.php

    // Untuk MySQL
    private $host = "localhost";
    private $db_name = "perkuliahan";
    private $username = "root";
    private $password = "";
    public $conn;
    ```
### 3. Migrasi Database

Setelah aplikasi terhubung dengan database, jalankan migrasi untuk membuat semua tabel yang diperlukan dan mengisi data awal.

1.  Pastikan detail koneksi di `migrate.php` sesuai dengan konfigurasi database lokal Anda (terutama untuk MySQL).
2.  Akses file `migrate.php` melalui browser Anda. Contoh: `http://localhost/College-Web-Sister/migrate.php`.
3.  Setelah migrasi berhasil, Anda akan melihat pesan sukses dan tautan untuk melanjutkan ke aplikasi.

## Struktur Proyek

```bash
.
├── app
│   ├── controllers     # Logika untuk menangani request
│   ├── models          # Logika untuk interaksi database
│   └── views           # File tampilan (UI)
├── config
│   └── database.php    # Konfigurasi koneksi database
├── database
│   └── migrations
│       └── perkuliahan.sql # Skema dan data awal database
├── public              # Folder publik, entry point aplikasi
│   ├── .htaccess       # Konfigurasi URL rewriting
│   ├── index.php       # File utama (front controller)
│   ├── css
│   └── js
├── migrate.php         # Skrip untuk menjalankan migrasi
