<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
class ShareUserInfoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
                // Share user data globally across all views
                view()->composer('*', function ($view) {
                    $view->with('usr', Auth::user());
                });
    }
}
