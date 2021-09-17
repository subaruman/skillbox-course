<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/album', 'album');

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create'])->name('createTask');
Route::get('/tasks/{task}', [TaskController::class, 'show']);
Route::post('/tasks', [TaskController::class, 'store']);

Route::get('/', [ArticleController::class, 'index']);
Route::get('/articles/create', [ArticleController::class, 'create'])->name('createArticle');

Route::model('articleSlug', \App\Models\Article::class);
Route::get('/articles/{articleSlug}', [ArticleController::class, 'show']);
Route::post('/', [ArticleController::class, 'store']);

Route::view('/about', 'about')->name('about');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::post('/contacts/create', [ContactsController::class, 'create'])->name('createContact');
