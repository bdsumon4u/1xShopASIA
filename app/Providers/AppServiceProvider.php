<?php

namespace App\Providers;

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
        $tagline = setting('tagline');
        View::composer(['welcome', 'welcome-footer'], function ($view) use ($tagline){
            $view->with(compact('tagline'));
        });
    }
}
