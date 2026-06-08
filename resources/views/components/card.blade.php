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
