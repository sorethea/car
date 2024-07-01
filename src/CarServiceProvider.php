<?php

namespace Sorethea\Car;


use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CarServiceProvider extends PackageServiceProvider
{
    public static string $name = "the-a-car";
    public function register(): void
    {
        if (! app()->configurationIsCached()) {
            $this->mergeConfigFrom(__DIR__.'/../config/car.php', 'car');
        }
        $this->loadTranslationsFrom(__DIR__.'/../lang','car');
    }

    public function boot(): void
    {
        $this->publishesMigrations([__DIR__.'/../database/migrations'=>database_path('migrations')],'car-migrations');
        $this->publishes([
            __DIR__.'/../config/car.php' => config_path('car.php'),
        ], 'car-config');
        $this->publishes([
            __DIR__.'/../lang' => lang_path('car'),
        ], 'car-translations');
    }

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile()
            ->hasTranslations()
            ->hasMigrations()
            ->hasViews();
    }
}
