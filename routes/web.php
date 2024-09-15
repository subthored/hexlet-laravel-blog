<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return redirect(route('articles.index'));
});

Route::get('about', [PageController::class, 'about']);

//Route::get('articles', [ArticleController::class, 'index'])
//    ->name('articles.index');
//
//Route::get('articles/create', [ArticleController::class, 'create'])
//    ->name('articles.create');
//
//Route::get('articles/{id}', [ArticleController::class, 'show'])
//    ->name('articles/show');
//
//Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
//    ->name('articles.edit');
//
//Route::patch('articles/{id}', [ArticleController::class, 'update'])
//    ->name('articles.update');
//
//Route::post('articles', [ArticleController::class, 'store'])
//    ->name('articles.store');
//
//Route::delete('articles/{id}', [ArticleController::class, 'destroy'])
//    ->name('articles.destroy');

Route::resource('articles', ArticleController::class);
