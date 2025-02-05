<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Show task list
Route::get('/', [TaskController::class, 'index']);

// Add new task
Route::post('/tasks', [TaskController::class, 'store']);

// Delete task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
