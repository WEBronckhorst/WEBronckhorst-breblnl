@props(['active' , 'href' ])

@php
$classes = ($active ?? false)
            ? 'hover:bg-blauw text-md font-semibold bg-blauw mb-3  text-white px-5 py-3 rounded mt-2  bg-opacity-70'
            : 'hover:bg-blauw hover:text-white text-md font-semibold bg-gray-50 mb-3   text-blauw px-5 py-3 rounded mt-2  ';
@endphp

<li {{ $attributes->merge(['class' => $classes]) }} >
    <a href="{{ $href }}"  >
        {{ $slot }}
    </a>
</li>

