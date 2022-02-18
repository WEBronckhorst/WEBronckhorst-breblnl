@props(['active'  ])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-3 py-2 text-sm font-medium text-gray-600  bg-gray-200 rounded-md hover:bg-gray-200 hover:text-gray-900'
            : 'flex items-center px-3 py-2 text-sm font-medium text-gray-600 rounded-md hover:bg-gray-100 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} >
    <span class="truncate"> {{  $slot }} </span>
</a>
