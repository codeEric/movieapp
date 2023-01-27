<?php

use App\Services\TmdbService;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function (TmdbService $tmdbService) {
    $data = $tmdbService->movies()->getPopular();
    return Inertia::render('Home');
});

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
