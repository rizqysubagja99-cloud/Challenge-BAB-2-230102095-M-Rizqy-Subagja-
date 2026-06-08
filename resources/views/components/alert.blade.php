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
