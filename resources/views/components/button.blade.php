@if ($href)
    <a href="{{ $href }}" class="{{ $btnClass() }}">
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" class="{{ $btnClass() }}">
        {{ $slot }}
    </button>
@endif
