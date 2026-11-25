<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    private function getProfile(): array
    {
        return [
            'name' => 'Hezekiah Austin Sunanto',
            'tagline' => 'Full-Stack Web Developer & UI/UX Enthusiast',
            'role' => 'Web Development & Software Engineering',
            'avatar' => 'images/avatar.JPG',
            'bio' => 'Mahasiswa Informatika Universitas Ciputra yang berfokus pada pengembangan aplikasi web modern menggunakan Laravel dan Bootstrap.',
            'education' => 'S1 Informatika - Universitas Ciputra (2024 - Sekarang)',
            'skills' => ['Laravel 13', 'PHP 8.4', 'Bootstrap 5.3', 'HTML5 & CSS3', 'Git & GitHub', 'UI/UX Design'],
            'experiences' => [
                'Magang di data management Telkomsel (2024)',
                'Praktikum Web Development (2026)',
            ],
            'email' => 'budi.santoso@student.ciputra.ac.id',
            'github' => 'https://github.com/budisantoso-dev',
            'linkedin' => 'https://linkedin.com/in/budisantoso-dev',
        ];
    }

    private function getPortfolios(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Mini Social Media App',
                'image' => 'images/portfolio-1.jpg',
                'description' => 'Aplikasi jejaring sosial berbasis web dengan fitur posting, komentar, profil pengguna, dan antarmuka responsif.',
                'tech' => ['Laravel 13', 'Blade', 'Bootstrap 5.3'],
            ],
            [
                'id' => 2,
                'title' => 'Sistem Manajemen Inventaris UMKM',
                'image' => 'images/portfolio-2.jpg',
                'description' => 'Aplikasi pencatatan stok barang masuk dan keluar beserta laporan penjualan harian secara real-time.',
                'tech' => ['PHP 8.4', 'MySQL', 'HTML5', 'CSS3'],
            ],
        ];
    }

    private function getBlogs(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Memulai Pengembangan Web Modern dengan Laravel 13 dan Herd',
                'image' => 'images/blog-1.jpg',
                'date' => '10 November 2026',
                'category' => 'Tutorial Laravel',
                'summary' => 'Panduan lengkap menyiapkan lingkungan pengembangan Laravel menggunakan Laravel Herd tanpa konfigurasi server yang rumit.',
                'content' => 'Laravel Herd menyederhanakan setup PHP, Composer, dan web server lokal dengan domain otomatis berakhiran .test sehingga developer dapat langsung fokus menulis kode aplikasi.',
            ],
            [
                'id' => 2,
                'title' => 'Memahami Arsitektur MVC dan Routing Dasar di Laravel',
                'image' => 'images/blog-2.jpg',
                'date' => '14 November 2026',
                'category' => 'Backend',
                'summary' => 'Bagaimana Laravel menghubungkan URL pengguna dengan Controller dan View secara terstruktur.',
                'content' => 'Routing bertugas menerima request HTTP seperti GET dan POST lalu meneruskannya ke Controller. Pemisahan ini menjaga file routes/web.php tetap bersih dan mudah dipelihara.',
            ],
            [
                'id' => 3,
                'title' => 'Mengurangi Duplikasi Kode dengan Blade Layout dan Component',
                'image' => 'images/blog-3.jpg',
                'date' => '18 November 2026',
                'category' => 'Frontend',
                'summary' => 'Penerapan @extends, @section, @yield, serta Anonymous Component untuk antarmuka yang modular.',
                'content' => 'Dengan Template Inheritance dan tag komponen <x-nama-komponen>, elemen seperti navbar, footer, dan card dapat digunakan ulang di berbagai halaman secara konsisten.',
            ],
            [
                'id' => 4,
                'title' => 'Membangun Desain Responsif Menggunakan Grid System Bootstrap 5.3',
                'image' => 'images/blog-4.jpg',
                'date' => '21 November 2026',
                'category' => 'UI/UX',
                'summary' => 'Memanfaatkan sistem 12 kolom Flexbox dan utility class Bootstrap agar tampilan optimal di desktop maupun mobile.',
                'content' => 'Bootstrap 5.3 menyediakan breakpoints mulai dari xs hingga xxl serta komponen siap pakai seperti Navbar, Card, dan Badge yang mempercepat proses styling antarmuka.',
            ],
            [
                'id' => 5,
                'title' => 'Manajemen Version Control Proyek Menggunakan Git dan GitHub',
                'image' => 'images/blog-5.jpg',
                'date' => '24 November 2026',
                'category' => 'Workflow',
                'summary' => 'Alur kerja dasar commit, branch, dan push ke repository GitHub untuk kolaborasi tim.',
                'content' => 'Git mencatat setiap perubahan kode secara lokal melalui staging area dan commit, sementara GitHub menyimpan repository secara online sekaligus menjaga keamanan file sensitif seperti .env.',
            ],
        ];
    }

    public function home(): View
    {
        return view('home', [
            'profile' => $this->getProfile(),
            'featuredPortfolios' => array_slice($this->getPortfolios(), 0, 2),
            'latestBlogs' => array_slice($this->getBlogs(), 0, 3),
        ]);
    }

    public function about(): View
    {
        return view('about', [
            'profile' => $this->getProfile(),
        ]);
    }

    public function portfolio(): View
    {
        return view('portfolio', [
            'portfolios' => $this->getPortfolios(),
        ]);
    }

    public function blog(): View
    {
        return view('blog.index', [
            'blogs' => $this->getBlogs(),
        ]);
    }

    public function blogShow(int $id): View
    {
        $blogs = $this->getBlogs();
        $blog = collect($blogs)->firstWhere('id', $id);

        if (!$blog) {
            abort(404);
        }

        return view('blog.show', [
            'blog' => $blog,
        ]);
    }

    public function contact(): View
    {
        return view('contact', [
            'profile' => $this->getProfile(),
        ]);
    }
}