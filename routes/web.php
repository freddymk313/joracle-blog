<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

Route::get('/', function () {
    $articles = Article::latest()->paginate(6);
    return view('home', compact('articles'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/articles/create', function () {
    return view('articles.create');
})->middleware(['auth'])->name('articles.create');

Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
});

require __DIR__.'/auth.php';
