<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Gestion des articles
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-100 text-green-800 border border-green-300 rounded p-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow rounded-lg p-6 overflow-x-auto">
                <table class="w-full table-auto">
                    <thead class="bg-[#E53935] text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">#</th>
                            <th class="px-4 py-2 text-left">Titre</th>
                            <th class="px-4 py-2 text-left">Catégorie</th>
                            <th class="px-4 py-2 text-left">Date</th>
                            <th class="px-4 py-2 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm text-gray-700">
                        @forelse($articles as $article)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $article->id }}</td>
                            <td class="px-4 py-2">{{ $article->title }}</td>
                            <td class="px-4 py-2">{{ $article->category }}</td>
                            <td class="px-4 py-2">{{ $article->created_at->format('d/m/Y') }}</td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-600 hover:underline">Modifier</a>
                                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Confirmer la suppression ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="px-4 py-4 text-center text-gray-500">Aucun article trouvé.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-6">
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
