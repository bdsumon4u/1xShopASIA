<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
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
        View::composer(['welcome'], function ($view) {
            $view->with(['tagline' => setting('tagline')]);
        });
        View::composer(['welcome-footer'], function ($view) {
            $view->with([
                'tagline' => setting('tagline'),
                'pages' => Cache::remember('pages', 86400, function () {
                    return Page::orderBy('order')->get(['title', 'slug']);
                }),
            ]);
        });
    }
}
