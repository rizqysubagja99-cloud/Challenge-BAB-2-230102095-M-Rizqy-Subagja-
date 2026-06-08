@extends('layouts.app')
@section('title', 'Demo Component')

@section('content')

{{-- Breadcrumb --}}
<x-breadcrumb :items="[
    ['label' => 'Beranda', 'url' => route('home')],
    ['label' => 'Demo', 'url' => '#'],
    ['label' => 'Component Library'],
]" />

<h2 class="section-title">Component Library</h2>
<div class="divider"></div>

{{-- ===== ALERT ===== --}}
<x-card title="1. Alert Component" class="mb-4">
    <x-alert type="success" message="Data berhasil disimpan ke database!" />
    <x-alert type="danger" message="Terjadi kesalahan saat memproses permintaan." />
    <x-alert type="warning" message="Sesi Anda akan berakhir dalam 5 menit." />
    <x-alert type="info" :dismissible="false">
        Ini alert <strong>info</strong> tanpa tombol close dan menggunakan <em>slot</em>.
    </x-alert>

    <div class="mt-3 p-3 bg-light rounded small">
        <strong>Cara pakai:</strong><br>
        <code>&lt;x-alert type="success" message="Pesan berhasil!" /&gt;</code><br>
        <code>&lt;x-alert type="info" :dismissible="false"&gt;Isi slot&lt;/x-alert&gt;</code>
    </div>
</x-card>

{{-- ===== BADGE ===== --}}
<x-card title="2. Badge Component" class="mb-4">
    <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
        <x-badge color="primary">Primary</x-badge>
        <x-badge color="success">Success</x-badge>
        <x-badge color="danger">Danger</x-badge>
        <x-badge color="warning">Warning</x-badge>
        <x-badge color="info">Info</x-badge>
        <x-badge color="secondary">Secondary</x-badge>
        <x-badge color="red">Custom Red</x-badge>
    </div>
    <div class="d-flex flex-wrap gap-2 align-items-center">
        <x-badge color="primary" :pill="true">Pill Primary</x-badge>
        <x-badge color="success" :pill="true">Pill Success</x-badge>
        <x-badge color="red" :pill="true">Pill Red</x-badge>
    </div>

    <div class="mt-3 p-3 bg-light rounded small">
        <strong>Cara pakai:</strong><br>
        <code>&lt;x-badge color="success"&gt;Teks&lt;/x-badge&gt;</code><br>
        <code>&lt;x-badge color="danger" :pill="true"&gt;Teks&lt;/x-badge&gt;</code>
    </div>
</x-card>

{{-- ===== BUTTON ===== --}}
<x-card title="3. Button Component" class="mb-4">
    <div class="d-flex flex-wrap gap-2 mb-3">
        <x-button variant="primary">Primary</x-button>
        <x-button variant="secondary">Secondary</x-button>
        <x-button variant="outline">Outline</x-button>
        <x-button variant="danger">Danger</x-button>
        <x-button variant="success">Success</x-button>
    </div>
    <div class="d-flex flex-wrap gap-2 mb-3">
        <x-button variant="primary" size="sm">Small</x-button>
        <x-button variant="primary">Normal</x-button>
        <x-button variant="primary" size="lg">Large</x-button>
    </div>
    <div class="mb-3">
        <x-button variant="primary" :block="true">Block Button (Penuh)</x-button>
    </div>
    <x-button variant="light" href="{{ route('home') }}">Link Button (Ke Beranda)</x-button>

    <div class="mt-3 p-3 bg-light rounded small">
        <strong>Cara pakai:</strong><br>
        <code>&lt;x-button variant="primary" size="sm"&gt;Klik&lt;/x-button&gt;</code><br>
        <code>&lt;x-button variant="outline" href="/url"&gt;Link&lt;/x-button&gt;</code>
    </div>
</x-card>

{{-- ===== CARD ===== --}}
<x-card title="4. Card Component" footer="Footer Card — bisa diisi teks apapun" class="mb-4">
    <p class="mb-2">Ini adalah <strong>slot konten</strong> dari Card Component.</p>
    <p class="text-muted small mb-0">Card mendukung prop <code>title</code> (header),
    <code>footer</code>, dan <code>padding</code>.</p>

    <div class="mt-3 p-3 bg-light rounded small">
        <strong>Cara pakai:</strong><br>
        <code>&lt;x-card title="Judul" footer="Footer"&gt;Konten&lt;/x-card&gt;</code>
    </div>
</x-card>

{{-- ===== BREADCRUMB ===== --}}
<x-card title="5. Breadcrumb Component">
    <x-breadcrumb :items="[
        ['label' => 'Beranda', 'url' => '/'],
        ['label' => 'Portofolio', 'url' => '/portofolio'],
        ['label' => 'Detail Proyek'],
    ]" />

    <div class="mt-2 p-3 bg-light rounded small">
        <strong>Cara pakai:</strong><br>
        <code>&lt;x-breadcrumb :items="[['label'=>'Home','url'=>'/'],['label'=>'Halaman']]" /&gt;</code>
    </div>
</x-card>

@endsection
