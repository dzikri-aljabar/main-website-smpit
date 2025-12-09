<?php

namespace App\Filament\Resources\PondokKurikulums\Pages;

use App\Filament\Resources\PondokKurikulums\PondokKurikulumResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPondokKurikulums extends ListRecords
{
    protected static string $resource = PondokKurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
