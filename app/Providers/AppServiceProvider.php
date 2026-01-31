<?php

namespace App\Providers;
use App\Service\PostService;
use Illuminate\Pagination\Paginator; // Add this

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(PostService::class, function() {
            return new PostService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive(); // Add this line
    }
}
