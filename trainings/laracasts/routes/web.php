<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('register', [App\Http\Controllers\RegisterController::class,'create'])->name('register')->middleware('guest');
Route::post('register', [App\Http\Controllers\RegisterController::class,'store'])->middleware('guest');
Route::get('index', [App\Http\Controllers\RegisterController::class,'index'])->name('homeIndex');

Route::post('logout',[App\Http\Controllers\LogoutController::class,'destroy'])->name('destroy')->middleware('auth');


Route::post('login',[App\Http\Controllers\LogoutController::class,'index'])->name('index');
Route::get('login',[App\Http\Controllers\LogoutController::class,'create'])->name('create.login')->middleware('guest');
Route::post('login',[App\Http\Controllers\LogoutController::class,'store'])->name('store')->middleware('guest');



Route::get('admin',[App\Http\Controllers\AdminController::class,'index'])->name('admin');
