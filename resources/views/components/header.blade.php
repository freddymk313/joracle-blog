<header class="">
    <nav class="bg-white border-b shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/joracle-logo.png') }}" alt="Joracle Logo" class="h-10">
                </a>
            </div>    
            
        <div class="flex items-center gap-4">
                @guest
                    <a href="{{ route('login') }}" class="text-[#E53935] font-medium hover:text-[#C62828]">Se connecter</a>
                    <a href="{{ route('register') }}" class="bg-[#E53935] text-white px-4 py-2 rounded hover:bg-[#C62828]">S'inscrire</a>
                @else
                    <span class="text-[#000000]">Bonjour, {{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-[#E53935] font-medium hover:text-[#C62828]">Déconnexion</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>
</header>
