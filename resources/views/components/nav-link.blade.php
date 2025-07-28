@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-3 py-2 border-b-2 border-[#E53935] text-sm font-medium text-[#E53935] focus:outline-none transition duration-150 ease-in-out'
    : 'inline-flex items-center px-3 py-2 border-b-2 border-transparent text-sm font-medium text-gray-600 hover:text-[#C62828] hover:border-[#C62828] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
