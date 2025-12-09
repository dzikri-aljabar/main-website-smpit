<?php

namespace App\Filament\Resources\SekolahKesiswaans\Pages;

use App\Filament\Resources\SekolahKesiswaans\SekolahKesiswaanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSekolahKesiswaans extends ListRecords
{
    protected static string $resource = SekolahKesiswaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
