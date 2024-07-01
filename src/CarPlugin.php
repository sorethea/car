<?php

namespace Sorethea\Car;

use Filament\Panel;
use Sorethea\Car\Filament\Resources\CarResource;
use Sorethea\Car\Filament\Resources\MakeResource;

class CarPlugin implements \Filament\Contracts\Plugin
{

    public function getId(): string
    {
        return "the-a-car";
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            CarResource::class,
            MakeResource::class,
        ]);

    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }
}
