<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\Schema;
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
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('footer', function ()
        {
            view()->share('latestPosts', Post::take(3)->latest()->get());
        });
    }
    
}
