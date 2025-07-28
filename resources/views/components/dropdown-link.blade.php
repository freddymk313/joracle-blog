<a {{ $attributes->merge([
    'class' => 'block w-full px-4 py-2 text-start text-sm text-gray-700 
                hover:bg-[#F4511E] hover:text-white 
                focus:outline-none focus:bg-[#E53935] focus:text-white 
                transition duration-150 ease-in-out'
]) }}>
    {{ $slot }}
</a>
