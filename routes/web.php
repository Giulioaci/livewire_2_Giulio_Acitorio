<?php

use App\Livewire\ArticleIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');

Route::get('/show/{article}', [ArticleController::class, 'show'])->name('article.show')->middleware('auth');

Route::get('/article', ArticleIndex::class)->name('articles.index');


