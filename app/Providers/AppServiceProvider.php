<?php

namespace App\Providers;

use App\Models\Category;
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
        view()->composer('layouts.Frontend.header', function ($view) {
            $categories=Category::all();
            $view->with('categories', $categories);
            $view->with('available_locales', config('app.available_locales'));
        });

    }
}
