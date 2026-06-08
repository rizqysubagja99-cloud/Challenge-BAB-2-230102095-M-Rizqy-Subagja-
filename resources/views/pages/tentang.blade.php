@extends('layouts.app')
@section('title', 'Tentang')

@section('content')

<h2 class="section-title">Tentang Saya</h2>
<div class="divider"></div>

<div class="row g-4 align-items-start">
    <div class="col-md-8">
        <p class="lead">Saya adalah seorang pengembang web yang berfokus pada ekosistem PHP dan Laravel. Saya menyukai membangun aplikasi yang bersih, cepat, dan mudah digunakan.</p>
        <p class="text-muted">Saat ini sedang menempuh semester 3 di jurusan Teknik Informatika. Saya aktif mengikuti praktikum dan terus mengasah skill pengembangan web.</p>

        {{-- Keahlian --}}
        <h5 class="mt-4 mb-3 fw-semibold">Keahlian</h5>
        @foreach ($keahlian as $skill)
        <div class="mb-2">
            <div class="d-flex justify-content-between small mb-1">
                <span>{{ $skill['nama'] }}</span>
                <span class="text-muted">{{ $skill['level'] }}%</span>
            </div>
            <div class="progress" style="height:6px">
                <div class="progress-bar"
                     style="width:{{ $skill['level'] }}%; background:#e3342f">
                </div>
            </div>
        </div>
        @endforeach

        {{-- Tim --}}
        <h5 class="mt-4 mb-3 fw-semibold">Tim Kami</h5>
        <div class="row g-3">
            @foreach ($tim as $anggota)
            <div class="col-md-4">
                <div class="card text-center p-3">
                    <div class="fs-1 mb-2">{{ $anggota['foto'] }}</div>
                    <h6 class="fw-bold mb-1">{{ $anggota['nama'] }}</h6>
                    <p class="text-muted small mb-0">{{ $anggota['peran'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    <div class="col-md-4">
        <div class="card p-4 text-center">
            <div class="fs-1 mb-2">&#128100;</div>
            <h5 class="fw-bold mb-1">Rizki Abd. Rahman</h5>
            <p class="text-muted small mb-2">Full Stack Developer</p>
            <hr>
            <p class="small text-muted mb-1">&#128205; Bandung, Indonesia</p>
            <p class="small text-muted mb-1">&#128231; ikirahman@gmail.com</p>
            <p class="small text-muted">&#127891; Teknik Informatika</p>
        </div>
    </div>
</div>

@endsection
