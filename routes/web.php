<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/charcters', function () {
    return view('characters');
})->name('characters');

Route::get('/', function () {
    $comics = config('comics.comics');
    return view('comics', compact('comics'));
})->name('Comics');


Route::get('/movies', function () {
    
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    $comics = config('tv');
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    $comics = config('games');
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    $comics = config('collectibles');
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    $comics = config('videos');
    return view('videos');
})->name('videos');

Route::get('/fans', function () {
    $comics = config('fans');
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    $comics = config('news');
    return view('news');
})->name('news');

Route::get('/shop', function () {
    $comics = config('shop');
    return view('shop');
})->name('shop');


