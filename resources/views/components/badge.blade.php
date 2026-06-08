@php
    $classes = $badgeClass();
    $style = $color === 'red' ? 'style="background:#e3342f"' : '';
@endphp

<span class="badge {{ $classes }} {{ $pill ? 'rounded-pill' : '' }}"
      {!! $style !!}>
    {{ $slot }}
</span>
