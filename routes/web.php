<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/comics', function () {
    return view('comics');
});

Route::get('/fans', function () {
    return view('fans');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/tv', function () {
    return view('tv');
});

Route::get('/videos', function () {
    return view('videos');
});
