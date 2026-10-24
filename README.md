# Pustaka Digital

## 1. Deskripsi Aplikasi

Pustaka Digital merupakan aplikasi berbasis web yang dikembangkan untuk mempermudah pengelolaan perpustakaan secara digital. Aplikasi ini dirancang untuk membantu proses pengelolaan data buku, anggota, serta peminjaman dan pengembalian buku agar lebih terorganisasi dan efisien.

## 2. Identitas Kelompok

| No. | Nama Anggota | NIM |
|---|---|---|
| 1. | Anida Putri Jaya | [Masukkan NIM] |
| 2. | Adema | [Masukkan NIM] |
| 3. | Haidar | [Masukkan NIM] |
| 4. | Edra | [Masukkan NIM] |

## 3. Teknologi yang Digunakan

- **Framework:** Laravel
- **Bahasa pemrograman:** PHP
- **Database:** MySQL
- **Dependency manager:** Composer

*Sesuaikan daftar teknologi di atas dengan teknologi yang benar-benar digunakan dalam proyek.*

## 4. Langkah Instalasi

Ikuti langkah-langkah berikut untuk menjalankan aplikasi di komputer lokal.

### A. Clone Repository

```bash
git clone [URL_REPOSITORY_GITHUB]
```

Masuk ke direktori proyek:

```bash
cd pustaka-digital
```

### B. Instal Dependensi

Jalankan perintah berikut untuk menginstal dependensi Laravel:

```bash
composer install
```

### C. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

Untuk Windows PowerShell, kamu juga bisa menggunakan:

```powershell
Copy-Item .env.example .env
```

### D. Generate Application Key

```bash
php artisan key:generate
```

### E. Konfigurasi Database

Buat database baru melalui MySQL atau phpMyAdmin. Setelah itu, sesuaikan konfigurasi database pada file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pustaka_digital
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan nama database, username, dan password dengan konfigurasi MySQL di komputer masing-masing.

### F. Migrasi dan Seeder Database

Jalankan perintah berikut untuk membuat tabel dan mengisi data awal:

```bash
php artisan migrate --seed
```

### G. Jalankan Aplikasi

```bash
php artisan serve
```

Buka browser dan akses alamat berikut:

```text
http://127.0.0.1:8000
```

## 5. Akun Pengujian

Gunakan akun berikut untuk menguji aplikasi setelah proses seeding database berhasil.

| Role | Email | Password |
|---|---|---|
| Admin | [Email admin hasil seeder] | [Password admin hasil seeder] |
| Mahasiswa | [Email mahasiswa hasil seeder] | [Password mahasiswa hasil seeder] |

**Catatan:** Akun di atas harus disesuaikan dengan akun yang benar-benar dibuat oleh seeder proyek.

## 6. Daftar Endpoint API

Daftar endpoint berikut merupakan template. Sesuaikan method, URL, dan fungsi endpoint dengan route API yang tersedia pada proyek.

| Method | Endpoint | Fungsi |
|---|---|---|
| GET | `/api/books` | Menampilkan daftar buku |
| GET | `/api/books/{id}` | Menampilkan detail buku |
| POST | `/api/books` | Menambahkan data buku |
| PUT/PATCH | `/api/books/{id}` | Memperbarui data buku |
| DELETE | `/api/books/{id}` | Menghapus data buku |
| GET | `/api/members` | Menampilkan daftar anggota |
| POST | `/api/loans` | Membuat data peminjaman buku |

Untuk melihat endpoint yang benar-benar terdaftar di Laravel, jalankan:

```bash
php artisan route:list --path=api
```

## 7. Pengembang

Proyek Pustaka Digital dikembangkan oleh kelompok mahasiswa sebagai bagian dari tugas proyek pengembangan aplikasi web.

