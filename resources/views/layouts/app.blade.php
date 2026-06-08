<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Challenge Laravel') | Bab 2</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            <span>&#9679;</span> DevPortfolio
        </a>
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav ms-auto gap-1">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active fw-semibold' : '' }}"
                       href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tentang') ? 'active fw-semibold' : '' }}"
                       href="{{ route('tentang') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('portofolio') ? 'active fw-semibold' : '' }}"
                       href="{{ route('portofolio') }}">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('blog') ? 'active fw-semibold' : '' }}"
                       href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active fw-semibold' : '' }}"
                       href="{{ route('kontak') }}">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('demo-component') ? 'active fw-semibold' : '' }}"
                    href="{{ route('demo-component') }}">Components</a>
                <li class="nav-item d-flex align-items-center me-2">
                <button id="darkModeToggle"
                        class="btn btn-sm btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center"
                        style="width:34px;height:34px;font-size:1rem"
                        title="Toggle Dark Mode"
                        aria-label="Toggle Dark Mode">
                            <span id="toggleIcon">🌙</span>
                        </button>
                    </li>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- CONTENT --}}
<main class="container my-4">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    @yield('content')
</main>

{{-- FOOTER --}}
<footer class="bg-dark text-light py-4 mt-5">
    <div class="container text-center">
        <p class="mb-1 fw-semibold">DevPortfolio</p>
        <p class="mb-0 text-secondary small">
            &copy; {{ date('Y') }} &mdash; Dibuat dengan Laravel 13 &amp; Bootstrap 5
        </p>
    </div>
</footer>
@push('scripts')
<script>
(function() {
    // Restore preference dari localStorage
    const saved = localStorage.getItem('darkMode');
    if (saved === 'dark') {
        document.documentElement.setAttribute('data-bs-theme', 'dark');
        const icon = document.getElementById('toggleIcon');
        if (icon) icon.textContent = '☀️';
    }
})();

document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('darkModeToggle');
    const icon   = document.getElementById('toggleIcon');
    const html   = document.documentElement;

    if (!toggle) return;

    toggle.addEventListener('click', function () {
        const isDark = html.getAttribute('data-bs-theme') === 'dark';

        if (isDark) {
            html.setAttribute('data-bs-theme', 'light');
            icon.textContent = '🌙';
            localStorage.setItem('darkMode', 'light');
        } else {
            html.setAttribute('data-bs-theme', 'dark');
            icon.textContent = '☀️';
            localStorage.setItem('darkMode', 'dark');
        }
    });
});
</script>
@endpush
@stack('scripts')
</body>
</html>
