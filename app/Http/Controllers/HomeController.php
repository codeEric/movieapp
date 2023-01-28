<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\TmdbService;

class HomeController extends Controller
{
    public function index(TmdbService $tmdbService)
    {

        $trendingMovies = $tmdbService->movies()->getWeeklyTrending(1)->json()['results'];
        $trendingMovies = array_merge($trendingMovies, array_slice($tmdbService->movies()->getWeeklyTrending(2)->json()['results'], 0, 4));

        $popularMovies = $tmdbService->movies()->getPopular(1)->json()['results'];
        $popularMovies = array_merge($popularMovies, array_slice($tmdbService->movies()->getPopular(2)->json()['results'], 0, 4));

        return Inertia::render('Home', [
            'popularMovies' => $popularMovies,
            'trendingMovies' => $trendingMovies
        ]);
    }
}
