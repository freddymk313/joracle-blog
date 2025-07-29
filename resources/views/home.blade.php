<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Joracle Blog - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

    {{-- Header --}}
    <x-header />

    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-r from-[#C62828] to-[#E53935] text-white py-24 md:py-32 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmYiIGZpbGwtb3BhY2l0eT0iMC4yIj48cGF0aCBkPSJNMzYgMzRjMC0yLjIwOS0xLjc5MS00LTQtNHMtNCAxLjc5MS00IDQgMS43OTEgNCA0IDQgNC0xLjc5MSA0LTR6Ii8+PC9nPjwvZz48L3N2Zz4=')]"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 leading-tight">
                <span class="block">Bienvenue sur le Blog</span>
                <span class="block text-[#FFD700]">Joracle Community</span>
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8">
                Explorez des articles inspirants enracinés dans la Parole de Dieu, pour édifier votre foi et approfondir votre marche avec Jésus-Christ.
            </p>
            <div class="relative max-w-md mx-auto">
                <input type="text" placeholder="Rechercher des articles..." class="w-full px-6 py-3 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-[#F4511E] shadow-lg">
                <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-gradient-to-r from-[#E53935] to-[#F4511E] text-white p-2 rounded-full hover:from-[#C62828] hover:to-[#E53935] transition duration-300">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </section>

    {{-- Section Articles --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex flex-col md:flex-row justify-between items-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#C62828] mb-4 md:mb-0">
                <span class="border-b-4 border-[#F4511E] pb-2">Derniers articles</span>
            </h2>
            <div class="flex space-x-2">
                <button class="px-4 py-2 bg-[#E53935] text-white rounded-lg hover:bg-[#C62828] transition duration-300">
                    Tous
                </button>
                <button class="px-4 py-2 bg-white text-[#E53935] border border-[#E53935] rounded-lg hover:bg-[#F4511E] hover:text-white transition duration-300">
                    Spiritualité
                </button>
                <button class="px-4 py-2 bg-white text-[#E53935] border border-[#E53935] rounded-lg hover:bg-[#F4511E] hover:text-white transition duration-300">
                    Études bibliques
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($articles as $article)
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-500 transform hover:-translate-y-2">
                <div class="relative">
                    <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('img/blog.png') }}" alt="Article" class="w-full h-56 object-cover">
                    <div class="absolute top-4 right-4 bg-[#F4511E] text-white text-xs font-bold px-3 py-1 rounded-full">
                        {{ $article->category }}
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="far fa-calendar-alt mr-2 text-[#E53935]"></i>
                        <span>{{ $article->created_at->format('d M Y') }}</span>
                        <span class="mx-2">•</span>
                        <i class="far fa-clock mr-2 text-[#E53935]"></i>
                        <span>5 min lecture</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800 hover:text-[#E53935] transition duration-300">
                        <a href="#">{{ $article->title }}</a>
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        {{ $article->description }}
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="text-[#E53935] font-medium hover:underline flex items-center">
                            Lire plus
                            <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                        <div class="flex space-x-2">
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded text-gray-600">#foi</span>
                            <span class="text-xs bg-gray-100 px-2 py-1 rounded text-gray-600">#évangile</span>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <p class="text-center text-gray-600 col-span-3">Aucun article pour le moment.</p>
            @endforelse
        </div>

        <div class="mt-16 flex justify-center">
            {{ $articles->links() }}
        </div>
</main>

    {{-- Footer --}}
    <x-footer />

</body>
</html>