<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [SessionController::class, 'create'])->name('login.create');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('post.store');