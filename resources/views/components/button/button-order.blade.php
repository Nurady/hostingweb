{{-- <a class="btn btn-primary px-4 py-2" href="{{ $url }}">
    {{ $title }}
</a> --}}

<a {{ $attributes->merge(['class' => '']) }} href="{{ $url }}" >
    {{ $title }}
</a>

