<?php

use App\Http\Controllers\{
    AeronaveController
};
use Illuminate\Support\Facades\Route;


Route::get('/', [AeronaveController::class, 'index'])->name('index');
Route::get('/posts/create', [AeronaveController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [AeronaveController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [AeronaveController::class, 'show'])->name('posts.show');
Route::delete('/posts/{id}', [AeronaveController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/edit/{id}', [AeronaveController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [AeronaveController::class, 'update'])->name('posts.update');
