<?php

use Illuminate\Support\Facades\Route;

//include HomeController
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

//HomeController
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

Route::get('/home',[\App\Http\Controllers\HomeController::class,'redirect']);

Route::get('/add_doctor_view',[\App\Http\Controllers\AdminController::class,'index']);
Route::post('/upload_doctor',[\App\Http\Controllers\AdminController::class,'store']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
