<?php

namespace Sorethea\Car\Filament\Resources;

use Sorethea\Car\Filament\Resources\CarResource\Pages;
use Sorethea\Car\Filament\Resources\CarResource\RelationManagers;
use Sorethea\Car\Models\Car;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'gmdi-toys-o';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => \Sorethea\Car\Filament\Resources\CarResource\Pages\ListCars::route('/'),
            'create' => \Sorethea\Car\Filament\Resources\CarResource\Pages\CreateCar::route('/create'),
            'edit' => \Sorethea\Car\Filament\Resources\CarResource\Pages\EditCar::route('/{record}/edit'),
        ];
    }

    public static function getNavigationGroup(): ?string
    {
        return trans('car::resources.navigator_group');
    }

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
        ];
    }
}
