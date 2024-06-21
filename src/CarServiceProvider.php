<?php

namespace Sorethea\Car;

use Illuminate\Support\ServiceProvider;

class CarServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        if (! app()->configurationIsCached()) {
            $this->mergeConfigFrom(__DIR__.'/../config/car.php', 'car');
        }
    }

    public function boot(): void
    {
        $this->publishesMigrations([__DIR__.'/../database/migrations'=>database_path('migrations')],'car-migrations');
        $this->publishes([
            __DIR__.'/../config/car.php' => config_path('car.php'),
        ], 'car-config');
    }
}
