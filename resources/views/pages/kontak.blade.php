@extends('layouts.app')
@section('title', 'Kontak')

@section('content')

<h2 class="section-title">Hubungi Saya</h2>
<div class="divider"></div>

<div class="row g-4">
    {{-- Form Kontak --}}
    <div class="col-md-7">
        <div class="card p-4">
            <h5 class="fw-semibold mb-3">Kirim Pesan</h5>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Email</label>
                <input type="email" class="form-control" placeholder="email@contoh.com">
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Subjek</label>
                <input type="text" class="form-control" placeholder="Subjek pesan">
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold">Pesan</label>
                <textarea class="form-control" rows="4" placeholder="Tulis pesan Anda..."></textarea>
            </div>
            <button class="btn btn-accent w-100">Kirim Pesan</button>
            <p class="text-muted small text-center mt-2 mb-0">
                * Form ini hanya tampilan, belum berfungsi
            </p>
        </div>
    </div>

    {{-- Info Kontak --}}
    <div class="col-md-5">
        <div class="card p-4 h-100">
            <h5 class="fw-semibold mb-3">Informasi Kontak</h5>
            @foreach ($info as $item)
            <div class="d-flex align-items-center gap-3 mb-3">
                <div class="fs-4">{{ $item['icon'] }}</div>
                <div>
                    <p class="fw-semibold mb-0 small">{{ $item['label'] }}</p>
                    <p class="text-muted small mb-0">{{ $item['nilai'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
