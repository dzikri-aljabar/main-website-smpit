<?php

namespace App\Filament\Resources\PrestasiGurus\Pages;

use App\Filament\Resources\PrestasiGurus\PrestasiGuruResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPrestasiGurus extends ListRecords
{
    protected static string $resource = PrestasiGuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
