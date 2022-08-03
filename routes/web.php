<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentsController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('students',studentsController::class);
