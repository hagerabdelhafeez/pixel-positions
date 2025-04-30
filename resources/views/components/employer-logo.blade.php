@props(['employer','width' => 90])

<img src="{{ asset('storage/' . $employer->logo) }}" alt="img" class="rounded-xl" width="{{ $width  }}">

{{-- https://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }} --}}


