<?php

namespace Incfile\MyBlog;

use Illuminate\Support\ServiceProvider;

class MyBlogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerResources();
    }

    public function register()
    {

    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
