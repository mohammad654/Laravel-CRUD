<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('students/', function () {
    return view('students');
});
Route::resource('students',studentsController::class);
