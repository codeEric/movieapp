<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/movies', function () {
    return Inertia::render('Movies');
});

Route::get('/tv', function () {
    return Inertia::render('TvShows');
});

Route::get('/watch-later', function () {
    return Inertia::render('WatchLater');
});


Route::get('/favorites', function () {
    return Inertia::render('Favorites');
});

Route::get('/login', function () {
    return Inertia::render('Auth/Login');
});

Route::get('/register', function () {
    return Inertia::render('Auth/Register');
});
