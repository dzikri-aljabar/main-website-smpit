<?php

namespace App\Filament\Resources\StrukturSekolahs\Pages;

use App\Filament\Resources\StrukturSekolahs\StrukturSekolahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStrukturSekolahs extends ListRecords
{
    protected static string $resource = StrukturSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
