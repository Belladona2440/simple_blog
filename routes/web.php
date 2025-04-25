<?php

use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\PostCondition;

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [SessionController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->name('login.store');
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');

Route::get('/profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/my-posts', [PostController::class, 'display'])->name('my-posts.display');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create')->middleware('auth');
Route::post('/posts/create', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post.show')->middleware('auth');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit')->middleware('auth');
Route::put('/posts/{post}/edit', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::post('/ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.upload');