<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StaticController;

//include
use App\Http\Controllers\DeviceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('1', [App\Http\Controllers\TestController::class, 'index']);

//device
Route::resource('device',DeviceController::class );


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
