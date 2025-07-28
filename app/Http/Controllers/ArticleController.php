<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index(Request $request) {
        $query = Article::with('category');

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $articles = $query->latest()->paginate(6);
        $categories = Category::all();

        return view('articles.index', compact('articles', 'categories'));
    }
}
