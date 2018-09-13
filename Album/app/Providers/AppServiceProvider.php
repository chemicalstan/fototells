<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Http\Repositories\AlbumProfile\AlbumProfileContract', 
         'App\Http\Repositories\AlbumProfile\EloquentAlbumProfileRepository');
         
        $this->app->bind('App\Http\Repositories\Album\AlbumContract', 
         'App\Http\Repositories\Album\EloquentAlbumRepository');

        $this->app->bind('App\Http\Repositories\Profile\ProfileContract', 
         'App\Http\Repositories\Profile\EloquentProfileRepository');
        
    }
}
