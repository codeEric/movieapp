<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
