<?php

use App\Http\Controllers\Api\ArticleApiController;

Route::get('/articles', [ArticleApiController::class, 'index']);
Route::get('/articles/{id}', [ArticleApiController::class, 'show']); 
