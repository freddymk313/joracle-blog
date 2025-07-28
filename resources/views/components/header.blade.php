<header>
    <nav class="bg-white border-b border-gray-100 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex justify-between items-center h-16">
                
                <div class="flex-shrink-0 flex items-center mt-1">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/joracle-logo.png') }}" alt="Joracle Logo" class="h-24 py-2">
                    </a>
                </div>    

                <div class="flex items-center space-x-2 md:space-x-4">
                    @guest
                        <a href="{{ route('login') }}" class="text-[#E53935] font-medium px-4 py-2.5 rounded-lg text-sm transition duration-300 hover:bg-red-50 border border-[#C62828] hover:text-[#C62828]">
                            Se connecter
                        </a>
                        <a href="{{ route('register') }}" class="bg-gradient-to-r from-[#E53935] to-[#F4511E] text-white px-6 py-2.5 rounded-lg text-sm font-medium shadow-sm transform transition duration-300 hover:shadow-md hover:from-[#C62828] hover:to-[#E53935]">
                            S'inscrire
                        </a>
                    @else
                        <a href="{{ route('dashboard') }}" class="bg-gradient-to-r from-[#F4511E] to-[#FF7043] text-white px-5 py-2.5 rounded-lg text-sm font-medium shadow-sm transform transition duration-300 hover:shadow-md hover:from-[#E53935] hover:to-[#F4511E]">
                            Dashboard
                        </a>
                    @endguest
                </div>

            </div>
        </div>
    </nav>
</header>