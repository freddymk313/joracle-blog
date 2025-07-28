<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Joracle Blog - Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Header --}}
    <x-header />

    <main class="max-w-7xl mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-6 text-center">Derniers articles</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Exemple d’article -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <img src="https://source.unsplash.com/600x400/?bible" alt="Article" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Titre de l’article</h3>
                    <p class="text-sm text-gray-500 mb-2">Catégorie : Spiritualité</p>
                    <p class="text-gray-700">Ceci est un aperçu du contenu de l’article. Cliquez pour lire plus...</p>
                    <a href="#" class="text-pink-600 mt-3 inline-block hover:underline">Lire plus</a>
                </div>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <x-footer />

</body>
</html>
