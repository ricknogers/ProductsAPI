<?php

namespace App\Providers;

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
<<<<<<< HEAD
        //
=======
        Paginator::useBootstrap();
        Schema::defaultstringLength(191);
>>>>>>> f7d507781f192894534ff69452995d0f5c486be1
    }
}
