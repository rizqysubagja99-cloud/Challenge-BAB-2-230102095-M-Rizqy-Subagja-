@extends('layouts.app')
@section('title', 'Blog')

@section('content')

<h2 class="section-title">Blog</h2>
<div class="divider"></div>

<div class="row g-4">
    @foreach ($artikel as $post)
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body p-4">
                <span class="badge mb-2" style="background:#e3342f">{{ $post['kategori'] }}</span>
                <h5 class="fw-semibold">{{ $post['judul'] }}</h5>
                <p class="text-muted small">{{ $post['excerpt'] }}</p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <small class="text-muted">&#128337; {{ $post['tanggal'] }}</small>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Baca &rarr;</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
