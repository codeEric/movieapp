<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Services\TmdbService;

class HomeController extends Controller
{
    public function index(TmdbService $tmdbService)
    {

        $popularMovies = $tmdbService->movies()->getPopular(1);
        $popularMovies = $popularMovies->concat($tmdbService->movies()->getPopular(2)->slice(0, 4));

        $trendingMoviesDaily = $tmdbService->movies()->getDailyTrending(1);
        $trendingMoviesDaily = $trendingMoviesDaily->concat($tmdbService->movies()->getDailyTrending(2)->slice(0, 4));

        $trendingMoviesWeekly = $tmdbService->movies()->getWeeklyTrending(1);
        $trendingMoviesWeekly = $trendingMoviesWeekly->concat($tmdbService->movies()->getWeeklyTrending(2)->slice(0, 4));

        return Inertia::render('Home', [
            'popularMovies' => $popularMovies,
            'trendingMoviesDaily' => $trendingMoviesDaily,
            'trendingMoviesWeekly' => $trendingMoviesWeekly,
        ]);
    }
}
