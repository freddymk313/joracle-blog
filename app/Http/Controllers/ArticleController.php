<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function create(Request $request) {
        $query = Article::with('category');

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $articles = $query->latest()->paginate(6);
        $categories = Category::all();

        return view('articles.create', compact('articles', 'categories'));
    }

    public function store(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
        ]);

        // Gestion image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
        }

        // Enregistrement
        Article::create([
            'title' => $validated['title'],
            'description' => Str::limit(strip_tags($validated['content']), 150),
            'content' => $validated['content'],
            'category' => $validated['category'],
            'image' => $imagePath,
        ]);

        return redirect()->route('dashboard')->with('success', 'Article publié avec succès !');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'image' => 'nullable|image|max:2048',
            'content' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public');
            $article->image = $imagePath;
        }

        $article->update([
            'title' => $validated['title'],
            'category' => $validated['category'],
            'description' => \Str::limit(strip_tags($validated['content']), 150),
            'content' => $validated['content'],
            'image' => $article->image,
        ]);

        return redirect()->route('dashboard')->with('success', 'Article mis à jour avec succès !');
    }

    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('articles.index', compact('articles'));
    }

    public function destroy($id)
{
    $article = Article::findOrFail($id);

    if ($article->image && \Storage::disk('public')->exists($article->image)) {
        \Storage::disk('public')->delete($article->image);
    }

    $article->delete();

    return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès !');
}
}
