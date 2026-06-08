Challenge 2 — Blade Component Library (5 Komponen)

Langkah 1 — Generate semua component diterminal
    php artisan make:component Alert
    php artisan make:component Card
    php artisan make:component Badge
    php artisan make:component Button
    php artisan make:component Breadcrumb

Langkah 2 — Edit class PHP setiap component
    app/View/Components/Alert.php:
            <?php
            
            namespace App\View\Components;
            
            use Illuminate\View\Component;
            
            class Alert extends Component
            {
                public function __construct(
                    public string $type = 'info',
                    public string $message = '',
                    public bool $dismissible = true,
                ) {}
            
                public function render()
                {
                    return view('components.alert');
                }
            }
            
    app/View/Components/Card.php:
            <?php
            
            namespace App\View\Components;
            
            use Illuminate\View\Component;
            
            class Card extends Component
            {
                public function __construct(
                    public string $title = '',
                    public string $footer = '',
                    public string $padding = '4',
                ) {}
            
                public function render()
                {
                    return view('components.card');
                }
            }

      app/View/Components/Badge.php:
        <?php
        
        namespace App\View\Components;
        
        use Illuminate\View\Component;
        
        class Badge extends Component
        {
            public function __construct(
                public string $color = 'primary',
                public bool $pill = false,
            ) {}
        
            public function badgeClass(): string
            {
                $colors = [
                    'primary'   => 'text-bg-primary',
                    'secondary' => 'text-bg-secondary',
                    'success'   => 'text-bg-success',
                    'danger'    => 'text-bg-danger',
                    'warning'   => 'text-bg-warning text-dark',
                    'info'      => 'text-bg-info text-dark',
                    'red'       => 'text-white',
                ];
                return $colors[$this->color] ?? 'text-bg-secondary';
            }
        
            public function render()
            {
                return view('components.badge');
            }
        }
                
    app/View/Components/Button.php:
        <?php
        
        namespace App\View\Components;
        
        use Illuminate\View\Component;
        
        class Button extends Component
        {
            public function __construct(
                public string $variant = 'primary',
                public string $size = '',
                public string $href = '',
                public string $type = 'button',
                public bool $block = false,
            ) {}
        
            public function btnClass(): string
            {
                $base = 'btn';
                $variants = [
                    'primary'   => 'btn-accent',
                    'secondary' => 'btn-outline-secondary',
                    'outline'   => 'btn-outline-dark',
                    'danger'    => 'btn-danger',
                    'success'   => 'btn-success',
                    'light'     => 'btn-outline-light',
                ];
                $sizes = ['sm' => 'btn-sm', 'lg' => 'btn-lg'];
                $sizeClass = $sizes[$this->size] ?? '';
                $blockClass = $this->block ? 'w-100' : '';
                $variantClass = $variants[$this->variant] ?? 'btn-primary';
                return trim("$base $variantClass $sizeClass $blockClass");
            }
        
            public function render()
            {
                return view('components.button');
            }
        }

    app/View/Components/Breadcrumb.php:
        <?php
        
        namespace App\View\Components;
        
        use Illuminate\View\Component;
        
        class Breadcrumb extends Component
        {
            public function __construct(
                public array $items = [],
            ) {}
        
            public function render()
            {
                return view('components.breadcrumb');
            }
        }

        
Langkah 3 — Buat template Blade setiap component
    resources/views/components/alert.blade.php:
        @php
            $icons = [
                'success' => '✅',
                'danger'  => '❌',
                'warning' => '⚠️',
                'info'    => '💡',
            ];
            $icon = $icons[$type] ?? '💡';
        @endphp
        
        <div class="alert alert-{{ $type }} {{ $dismissible ? 'alert-dismissible fade show' : '' }} d-flex align-items-start gap-2"
             role="alert">
            <span>{{ $icon }}</span>
            <div class="flex-grow-1">
                {{ $message ?: $slot }}
            </div>
            @if ($dismissible)
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endif
        </div>
        
    resources/views/components/card.blade.php:
            <div class="card shadow-sm">
            @if ($title)
            <div class="card-header fw-semibold bg-white">
                {{ $title }}
            </div>
            @endif
        
            <div class="card-body p-{{ $padding }}">
                {{ $slot }}
            </div>
        
            @if ($footer)
            <div class="card-footer text-muted small bg-white">
                {{ $footer }}
            </div>
            @endif
        </div>

    resources/views/components/badge.blade.php:
        @php
            $classes = $badgeClass();
            $style = $color === 'red' ? 'style="background:#e3342f"' : '';
        @endphp
        
        <span class="badge {{ $classes }} {{ $pill ? 'rounded-pill' : '' }}"
              {!! $style !!}>
            {{ $slot }}
        </span>

    resources/views/components/button.blade.php:
    
        @if ($href)
            <a href="{{ $href }}" class="{{ $btnClass() }}">
                {{ $slot }}
            </a>
        @else
            <button type="{{ $type }}" class="{{ $btnClass() }}">
                {{ $slot }}
            </button>
        @endif
        
    resources/views/components/breadcrumb.blade.php:
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                @foreach ($items as $index => $item)
                    @if ($loop->last)
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $item['label'] }}
                        </li>
                    @else
                        <li class="breadcrumb-item">
                            <a href="{{ $item['url'] ?? '#' }}" class="text-decoration-none"
                               style="color:#e3342f">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ol>
        </nav>

 Langkah 4 — Buat halaman demo component
     Tambahkan route baru di routes/web.php
        // ===== DEMO COMPONENT =====
        Route::get('/demo-component', function () {
            return view('pages.demo-component');
        })->name('demo-component');

        
    Buat file resources/views/pages/demo-component.blade.php:
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
        
Langkah 5 — Tambahkan link demo ke navbar

    Buka resources/views/layouts/app.blade.php, tambahkan item navbar baru:
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('demo-component') ? 'active fw-semibold' : '' }}"
               href="{{ route('demo-component') }}">Components</a>
        </li>
# Challenge-BAB-2-230102095-M-Rizqy-Subagja-
