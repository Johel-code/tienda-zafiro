<?php

namespace App\Providers;

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
        $this->app->bind('https://tienda-zafiro-production-e065.up.railway.app/', function () {
            // return your own correct path.
            return realpath(base_path('../'));
        });
    }
}
