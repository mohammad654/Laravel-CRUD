<?php

use Illuminate\Support\Facades\Route;

//included RegisterController
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;



Route::get('/', function () {
    return view('index');
});

// //RegisterController
// Route::get('/register', [App\Http\Controllers\RegisterController::class,'index'])->name('register');
// Route::post('/register', [App\Http\Controllers\RegisterController::class,'store']);

// //LoginController
// Route::get('/login', [App\Http\Controllers\LoginController::class,'index'])->name('login')->middleware('auth');
// Route::post('/login', [App\Http\Controllers\LoginController::class,'store']);

// //LogoutController
// //Route::post('/logout', [App\Http\Controllers\LogoutController::class,'redirect'])->name('Logout');
// Route::get('/logout', [App\Http\Controllers\LogoutController::class,'redirect']);





Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::post('/logout', [LogoutController::class, 'redirect'])->name('logout');

Route::get('/login', [LoginController ::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store']);


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/home', [LoginController ::class,'index'])->name('home');


Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);
