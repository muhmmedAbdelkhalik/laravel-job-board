<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


// Public routes
Route::get('/', IndexController::class)->name('index');
Route::get('/contact', ContactController::class);

Route::get('/job', [JobController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register'])->name('signup');;

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes
Route::middleware('auth')->group(function () {
    Route::resource('/posts', PostController::class);
    Route::resource('/comments', CommentController::class);
    Route::resource('/tags', TagController::class);
});

// Protected routes
Route::middleware('onlyMe')->group(function () {
    Route::get('/about', AboutController::class);
});
