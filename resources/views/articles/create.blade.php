<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Ajouter un nouvel article
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow p-8">
                <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Titre -->
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">Titre de l'article</label>
                        <input type="text" id="title" name="title" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#E53935]" placeholder="Entrez le titre...">
                    </div>

                    <!-- Catégorie -->
                    <div class="mb-4">
                        <label for="category" class="block text-gray-700 font-semibold mb-2">Catégorie</label>
                        <select id="category" name="category" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#E53935]">
                            <option value="">Choisissez une catégorie</option>
                            <option>Spiritualité</option>
                            <option>Études bibliques</option>
                            <option>Prières</option>
                        </select>
                    </div>

                    <!-- Image -->
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-semibold mb-2">Image de couverture</label>
                        <input type="file" id="image" name="image" class="w-full">
                    </div>

                    <!-- Contenu -->
                    <div class="mb-6">
                        <label for="content" class="block text-gray-700 font-semibold mb-2">Contenu</label>
                        <textarea id="content" name="content" rows="6" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#E53935]" placeholder="Écrivez le contenu de l'article..."></textarea>
                    </div>

                    <!-- Boutons -->
                    <div class="flex justify-end space-x-3">
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-300">Annuler</a>
                        <button type="submit" class="px-6 py-2 bg-[#E53935] text-white rounded-lg hover:bg-[#C62828] transition duration-300">
                            <i class="fas fa-paper-plane mr-2"></i> Publier l'article
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
