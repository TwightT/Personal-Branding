# Personal Branding Website - AFL-1 Web Development

Website Personal Branding berbasis **Laravel 13** dan **Bootstrap 5.3** untuk menampilkan profil, keahlian, portofolio karya, artikel blog, serta informasi kontak.

## Fitur Utama
- **Home**: Ringkasan identitas, bidang keahlian, karya unggulan, dan artikel terbaru.
- **About**: Profil lengkap, riwayat pendidikan, skills, serta pengalaman.
- **Portfolio**: Daftar karya/proyek dinamis menggunakan Blade Component (`<x-portfolio-card />`).
- **Blog & Detail Blog**: Daftar artikel dengan halaman detail dinamis (`/blog/{id}`).
- **Contact**: Informasi email dan tautan media sosial profesional.

## Cara Menjalankan Project
1. Clone repository ini:
   `git clone <URL_REPOSITORY_ANDA>`
2. Masuk ke direktori project:
   `cd personal-branding`
3. Install dependency Composer:
   `composer install`
4. Salin file `.env.example` menjadi `.env` dan generate application key:
   `cp .env.example .env`
   `php artisan key:generate`
5. Jalankan local server:
   `php artisan serve` (atau buka melalui domain `.test` jika menggunakan Laravel Herd).

## Penggunaan AI
AI digunakan sebagai alat bantu pembelajaran dalam menyusun struktur awal kode Blade Component, penyusunan tata letak responsif Bootstrap 5.3, serta pembuatan contoh teks data dummy. Seluruh struktur routing, controller, dan logika tampilan telah disesuaikan dan dipahami secara mandiri.