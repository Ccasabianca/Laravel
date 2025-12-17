<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');


Route::fallback(function () {
    return view('errors.not-found');
});

Route::prefix('article')->group(function () {
    Route::get('/creer', [ArticleController::class, 'create'])->name('article.create');
    Route::get('/modifier/{id}', [ArticleController::class, 'update'])->name('article.update')
        ->where('id', '[0-9]+');
    Route::get('/supprimer/{id}', [ArticleController::class, 'delete'])->name('article.delete')
        ->where('id', '[0-9]+');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('articles.show')
        ->where('id', '[0-9]+');
});
