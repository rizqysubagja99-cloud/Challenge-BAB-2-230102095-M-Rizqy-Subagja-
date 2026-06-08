@extends('layouts.app')
@section('title', 'Beranda')

@section('content')

{{-- Hero Section --}}
<div class="hero-section text-white text-center">
    <h1 class="display-5 fw-bold mb-2">Halo, Saya <span style="color:#e3342f">Rizqy Subagja</span></h1>
    <p class="lead text-secondary mb-4">Web Developer &middot; Laravel Enthusiast &middot; UI/UX Lover</p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
        <a href="{{ route('portofolio') }}" class="btn btn-accent px-4">Lihat Portofolio</a>
        <a href="{{ route('kontak') }}" class="btn btn-outline-light px-4">Hubungi Saya</a>
    </div>
</div>

{{-- Fitur Cards --}}
<div class="row g-4 mb-5">
    @foreach ($fitur as $item)
    <div class="col-md-4">
        <div class="card h-100 p-4">
            <div class="fs-2 mb-2">{{ $item['icon'] }}</div>
            <h5 class="section-title">{{ $item['judul'] }}</h5>
            <p class="text-muted small mb-0">{{ $item['desc'] }}</p>
        </div>
    </div>
    @endforeach
</div>

{{-- Stats --}}
<div class="row text-center g-4 mb-4">
    <div class="col-4">
        <h2 class="fw-bold" style="color:#e3342f">12+</h2>
        <p class="text-muted small">Proyek Selesai</p>
    </div>
    <div class="col-4">
        <h2 class="fw-bold" style="color:#e3342f">3+</h2>
        <p class="text-muted small">Tahun Pengalaman</p>
    </div>
    <div class="col-4">
        <h2 class="fw-bold" style="color:#e3342f">8+</h2>
        <p class="text-muted small">Klien Puas</p>
    </div>
</div>

@endsection
