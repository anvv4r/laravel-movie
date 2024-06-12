<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/awards', [App\Http\Controllers\AwardController::class, 'index']);

Route::get('/genres', [App\Http\Controllers\GenresController::class, 'index']);

Route::get('/top-rated-movies', [App\Http\Controllers\MovieController::class, 'index']);

Route::get('/movies', [App\Http\Controllers\MovieController::class, 'index']);

Route::get('/movies/shawshank-redemption', [App\Http\Controllers\MovieController::class, 'shawshank']);

Route::get('/search', 'App\Http\Controllers\MovieController@search');


