@props(['active'])

@php
$classes = ($active ?? false)
    ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-[#E53935] text-start text-base font-medium text-[#E53935] bg-[#FFEBEE] focus:outline-none focus:text-[#C62828] focus:bg-[#FFCDD2] focus:border-[#C62828] transition duration-150 ease-in-out'
    : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-700 hover:text-[#E53935] hover:bg-[#FFF5F5] hover:border-[#F4511E] focus:outline-none focus:text-[#C62828] focus:bg-[#FFF5F5] focus:border-[#E53935] transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
