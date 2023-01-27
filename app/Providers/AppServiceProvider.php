<?php

namespace App\Providers;

use App\Services\TmdbService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(
            abstract: TmdbService::class,
            concrete: fn () => new TmdbService(
                baseUrl: strval(config('services.tmdb.baseUrl')),
                apiKey: strval(config('services.tmdb.key')),
            ),
        );
    }
}
