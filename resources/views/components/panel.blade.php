@php
    $classes = 'p-4 bg-white/5 rounded-lg border border-transparent hover:border-blue-800 group transition-colors duration-1000';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
{{ $slot }}
</div>
