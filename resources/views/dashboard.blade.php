<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                Tableau de Bord
            </h2>
            <div class="flex space-x-4">
                <button class="bg-[#E53935] text-sm hover:bg-[#C62828] text-white px-4 py-2 rounded-lg shadow-sm transition duration-300 flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    Nouvel Article
                </button>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Cartes Statistiques --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

                <!-- Articles -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border-l-4 border-[#E53935] hover:shadow-xl transition duration-500 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-500">Articles publiés</h3>
                                <p class="text-3xl font-bold mt-2 text-gray-800">24</p>
                                <div class="flex items-center mt-2 text-sm text-green-500">
                                    <i class="fas fa-arrow-up mr-1"></i>
                                    <span>12% ce mois</span>
                                </div>
                            </div>
                            <div class="bg-[#E53935]/10 p-3 rounded-full">
                                <i class="fas fa-file-alt text-2xl text-[#E53935]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catégories -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border-l-4 border-[#F4511E] hover:shadow-xl transition duration-500 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-500">Catégories</h3>
                                <p class="text-3xl font-bold mt-2 text-gray-800">8</p>
                                <div class="flex items-center mt-2 text-sm text-blue-500">
                                    <i class="fas fa-tag mr-1"></i>
                                    <span>5 actives</span>
                                </div>
                            </div>
                            <div class="bg-[#F4511E]/10 p-3 rounded-full">
                                <i class="fas fa-tags text-2xl text-[#F4511E]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Commentaires -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border-l-4 border-[#FF7043] hover:shadow-xl transition duration-500 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-500">Commentaires</h3>
                                <p class="text-3xl font-bold mt-2 text-gray-800">156</p>
                                <div class="flex items-center mt-2 text-sm text-purple-500">
                                    <i class="fas fa-comment mr-1"></i>
                                    <span>12 nouveaux</span>
                                </div>
                            </div>
                            <div class="bg-[#FF7043]/10 p-3 rounded-full">
                                <i class="fas fa-comments text-2xl text-[#FF7043]"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Administrateur -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden border-l-4 border-[#C62828] hover:shadow-xl transition duration-500 transform hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-500">Administrateur</h3>
                                <p class="text-xl font-bold mt-2 text-gray-800">Freddy Mk</p>
                                <div class="flex items-center mt-2 text-sm text-[#E53935]">
                                    <i class="fas fa-user-shield mr-1"></i>
                                    <span>Super Admin</span>
                                </div>
                            </div>
                            <div class="bg-[#C62828]/10 p-3 rounded-full">
                                <i class="fas fa-user-cog text-2xl text-[#C62828]"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        
                <!-- Derniers Articles -->
                <div class="w-full bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-800">Derniers Articles</h3>
                        <a href="#" class="text-sm text-[#E53935] hover:text-[#C62828] transition duration-300">
                            Voir tout <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                    <div class="divide-y divide-gray-100">
                        @for($i = 1; $i <= 3; $i++)
                        <div class="p-6 hover:bg-gray-50 transition duration-200">
                            <div class="flex items-start">
                                <div class="flex-shrink-0 bg-[#E53935]/10 p-2 rounded-lg">
                                    <i class="fas fa-file-alt text-lg text-[#E53935]"></i>
                                </div>
                                <div class="ml-4">
                                    <h4 class="font-medium text-gray-800">Titre de l'article {{$i}}</h4>
                                    <p class="text-sm text-gray-500 mt-1">Publié le {{ now()->subDays($i)->format('d/m/Y') }}</p>
                                    <div class="flex mt-2 space-x-2">
                                        <span class="text-xs bg-gray-100 px-2 py-1 rounded text-gray-600">Spiritualité</span>
                                        <span class="text-xs bg-gray-100 px-2 py-1 rounded text-gray-600">Études bibliques</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>