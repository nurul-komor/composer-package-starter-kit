<?php

namespace MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Load the routes for the package
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    public function boot()
    {
        // publishing, etc.
    }
}
