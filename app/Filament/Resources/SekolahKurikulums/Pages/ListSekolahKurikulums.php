<?php

namespace App\Filament\Resources\SekolahKurikulums\Pages;

use App\Filament\Resources\SekolahKurikulums\SekolahKurikulumResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSekolahKurikulums extends ListRecords
{
    protected static string $resource = SekolahKurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
