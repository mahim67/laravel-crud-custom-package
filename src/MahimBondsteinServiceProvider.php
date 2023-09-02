<?php

namespace Mahim\Bondstein;

use Illuminate\Support\ServiceProvider;

class MahimBondsteinServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'bondstein-code-challenge');
    }
    public function register()
    {
        // $this->mergeConfigFrom(
        //     __DIR__ . '', ''
        // );
    }
}
