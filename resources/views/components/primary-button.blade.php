

<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2.5 bg-[#E53935] hover:bg-[#C62828] text-white text-sm font-semibold rounded-lg transition']) }}>
    {{ $slot }}
</button>
