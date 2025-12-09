<?php

namespace App\Filament\Resources\PondokKesantrians\Pages;

use App\Filament\Resources\PondokKesantrians\PondokKesantrianResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPondokKesantrians extends ListRecords
{
    protected static string $resource = PondokKesantrianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
