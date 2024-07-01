<?php

namespace Sorethea\Car\Filament\Resources\MakeResource\Pages;

use Sorethea\Car\Filament\Resources\MakeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMakes extends ListRecords
{
    protected static string $resource = MakeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
