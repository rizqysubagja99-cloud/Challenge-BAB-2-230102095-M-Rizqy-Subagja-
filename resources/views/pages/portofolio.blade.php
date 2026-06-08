@extends('layouts.app')
@section('title', 'Portofolio')

@section('content')

<h2 class="section-title">Portofolio</h2>
<div class="divider"></div>

<div class="row g-4">
    @foreach ($proyek as $item)
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <span class="fs-3">{{ $item['icon'] }}</span>
                    <span class="badge rounded-pill" style="background:#e3342f; font-size:0.7rem">
                        {{ $item['kategori'] }}
                    </span>
                </div>
                <h5 class="fw-semibold">{{ $item['nama'] }}</h5>
                <p class="text-muted small">{{ $item['desc'] }}</p>
                <div class="d-flex flex-wrap gap-1 mt-3">
                    @foreach ($item['teknologi'] as $tech)
                    <span class="badge text-bg-light border small">{{ $tech }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
