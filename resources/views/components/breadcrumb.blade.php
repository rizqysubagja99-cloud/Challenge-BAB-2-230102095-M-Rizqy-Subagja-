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
