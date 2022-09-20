<?php

use Illuminate\Support\Facades\Route;

//include AdminController
use  App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ArtisthasGenreController;
use App\Http\Controllers\SongHasGenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['RevalidateBackHistory'])->group(function () {

//    Route::get('/', function () {
//        return view('user.dashboard');
//    });
    Route::get('/',[\App\Http\Controllers\AdminController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[\App\Http\Controllers\AdminController::class,'index'])->name('dashboard');
});

   Route::resource('artist',ArtistController::class);
   Route::resource('genre',GenreController::class);
    Route::resource('album',AlbumController::class);
    Route::resource('song',SongController::class);
    Route::resource('ArtisthasGenre',ArtisthasGenreController::class);
    Route::resource('SongHasGenre',SongHasGenreController::class);
});
