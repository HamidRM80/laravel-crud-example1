<?php

namespace Hamidreza\LaravelCrudExample;

use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->bind('post');
        $this->mergeConfigFrom(__DIR__.'/config/post.php', 'post');
    }

    public function boot() {
        require __DIR__ . '/routes/routes.php';
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'post');
        $this->publishes([
            __DIR__.'/config/post.php' => config_path('post.php'),
            __DIR__.'/resources/views' => base_path('resources/views/post'),
            __DIR__.'/database/migrations' => database_path('/migrations'),
        ]);
    }
}
