<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('partials.footer', function ($view) {
            $profil = Cache::remember('profil', 3600, function () {
                return \App\Models\ProfilDesa::first();
            });
            $view->with('profil', $profil);
        });
    }
}
