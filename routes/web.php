<?php

use Illuminate\Support\Facades\Route;

// ===== BERANDA =====
Route::get('/', function () {
    $fitur = [
        ['icon' => '🚀', 'judul' => 'Laravel Framework', 'desc' => 'Framework PHP modern dengan arsitektur MVC yang terstruktur dan elegan.'],
        ['icon' => '🎨', 'judul' => 'Blade Template', 'desc' => 'Template engine yang powerful untuk membuat UI dinamis dan reusable.'],
        ['icon' => '🗄️', 'judul' => 'Eloquent ORM', 'desc' => 'Akses database dengan cara yang intuitif tanpa menulis SQL manual.'],
        ['icon' => '🔐', 'judul' => 'Security Built-in', 'desc' => 'Perlindungan CSRF, XSS, dan SQL Injection secara otomatis.'],
        ['icon' => '⚡', 'judul' => 'Artisan CLI', 'desc' => 'Command line tool untuk mempercepat proses pengembangan.'],
        ['icon' => '📦', 'judul' => 'Package Ecosystem', 'desc' => 'Ribuan paket siap pakai dari Composer dan komunitas Laravel.'],
    ];
    return view('pages.home', compact('fitur'));
})->name('home');

// ===== TENTANG =====
Route::get('/tentang', function () {
    $tim = [
        ['nama' => 'Rizqy Subagja',  'peran' => 'Full Stack Developer', 'foto' => '👨‍💻'],
        ['nama' => 'Christopher',   'peran' => 'UI/UX Designer',       'foto' => '👩‍🎨'],
        ['nama' => 'Devin',  'peran' => 'Backend Developer',    'foto' => '👨‍💼'],
    ];
    $keahlian = [
        ['nama' => 'Laravel / PHP', 'level' => 85],
        ['nama' => 'HTML & CSS',    'level' => 90],
        ['nama' => 'JavaScript',    'level' => 70],
        ['nama' => 'MySQL',         'level' => 75],
        ['nama' => 'Bootstrap 5',   'level' => 88],
    ];
    return view('pages.tentang', compact('tim', 'keahlian'));
})->name('tentang');

// ===== PORTOFOLIO =====
Route::get('/portofolio', function () {
    $proyek = [
        ['icon' => '🛒', 'nama' => 'Toko Online', 'kategori' => 'Web App',
         'desc' => 'Platform e-commerce lengkap dengan keranjang belanja dan pembayaran.',
         'teknologi' => ['Laravel', 'MySQL', 'Bootstrap']],
        ['icon' => '📊', 'nama' => 'Dashboard Admin', 'kategori' => 'Dashboard',
         'desc' => 'Panel administrasi dengan grafik statistik dan manajemen data.',
         'teknologi' => ['Laravel', 'Chart.js', 'Tailwind']],
        ['icon' => '📝', 'nama' => 'Blog Platform', 'kategori' => 'CMS',
         'desc' => 'Sistem manajemen konten dengan editor WYSIWYG dan komentar.',
         'teknologi' => ['Laravel', 'Alpine.js', 'Bootstrap']],
        ['icon' => '🏥', 'nama' => 'Sistem Klinik', 'kategori' => 'Web App',
         'desc' => 'Manajemen jadwal dokter, rekam medis, dan antrian pasien.',
         'teknologi' => ['Laravel', 'Livewire', 'MySQL']],
        ['icon' => '📱', 'nama' => 'REST API', 'kategori' => 'API',
         'desc' => 'API backend untuk aplikasi mobile dengan autentikasi JWT.',
         'teknologi' => ['Laravel', 'Sanctum', 'PostgreSQL']],
        ['icon' => '🎓', 'nama' => 'E-Learning', 'kategori' => 'Web App',
         'desc' => 'Platform pembelajaran online dengan modul, kuis, dan sertifikat.',
         'teknologi' => ['Laravel', 'Vue.js', 'MySQL']],
    ];
    return view('pages.portofolio', compact('proyek'));
})->name('portofolio');

// ===== BLOG =====
Route::get('/blog', function () {
    $artikel = [
        ['judul' => 'Memulai Laravel 13 dari Nol', 'kategori' => 'Tutorial',
         'excerpt' => 'Panduan lengkap instalasi dan setup proyek Laravel 13 untuk pemula.',
         'tanggal' => '01 Jun 2026'],
        ['judul' => 'Blade Template: Tips & Trik', 'kategori' => 'Tips',
         'excerpt' => 'Kumpulan tips menggunakan Blade Template agar kode lebih bersih.',
         'tanggal' => '28 Mei 2026'],
        ['judul' => 'Eloquent ORM vs Query Builder', 'kategori' => 'Comparison',
         'excerpt' => 'Kapan harus pakai Eloquent dan kapan lebih baik pakai Query Builder.',
         'tanggal' => '22 Mei 2026'],
        ['judul' => 'Authentication dengan Laravel Breeze', 'kategori' => 'Tutorial',
         'excerpt' => 'Cara mudah menambahkan sistem login ke aplikasi Laravel Anda.',
         'tanggal' => '15 Mei 2026'],
    ];
    return view('pages.blog', compact('artikel'));
})->name('blog');

// ===== KONTAK =====
Route::get('/kontak', function () {
    $info = [
        ['icon' => '📍', 'label' => 'Alamat',    'nilai' => 'Bandung, Jawa Barat'],
        ['icon' => '📧', 'label' => 'Email',     'nilai' => 'rizqysubagja99@gmail.com'],
        ['icon' => '📱', 'label' => 'WhatsApp',  'nilai' => '+62 889657244137'],
        ['icon' => '🕐', 'label' => 'Jam Kerja', 'nilai' => 'Senin - Jumat, 09:00 - 17:00'],
    ];
    return view('pages.kontak', compact('info'));
})->name('kontak');

// ===== DEMO COMPONENT =====
Route::get('/demo-component', function () {
    return view('pages.demo-component');
})->name('demo-component');
