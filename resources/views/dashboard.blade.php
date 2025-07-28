<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                Tableau de Bord
            </h2>
            <div class="">
                <a href="{{ route('articles.create') }}" class="bg-[#E53935] text-sm hover:bg-[#C62828] text-white px-4 py-2 rounded-lg shadow-sm transition duration-300 flex items-center">
                    Nouvel Article
                </a>
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
                                <p class="text-3xl font-bold mt-2 text-gray-800">3</p>
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
        </div>
    </div>
</x-app-layout>