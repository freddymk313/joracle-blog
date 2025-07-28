<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'articles' => Article::latest()->get()
        ]);
    }

    public function show($id)
    {
        $article = Article::find($id);

        if (!$article) {
            return response()->json([
                'status' => false,
                'message' => 'Article non trouvé'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'article' => $article
        ]);
    }
}
