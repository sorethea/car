<?php

namespace Sorethea\Car\Filament\Resources\MakeResource\Pages;

use Sorethea\Car\Filament\Resources\MakeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMake extends EditRecord
{
    protected static string $resource = MakeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
