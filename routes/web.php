<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/album', 'album');

Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::get('/tasks/{task}', [TaskController::class, 'show']);
Route::post('/tasks', [TaskController::class, 'store']);
