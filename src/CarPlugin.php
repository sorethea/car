<?php

namespace Sorethea\Car;

use Filament\Panel;

class CarPlugin implements \Filament\Contracts\Plugin
{

    public function getId(): string
    {
        return "the-a-car";
    }

    public function register(Panel $panel): void
    {

    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }
}
