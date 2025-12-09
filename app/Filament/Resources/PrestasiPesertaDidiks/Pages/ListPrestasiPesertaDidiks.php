<?php

namespace App\Filament\Resources\PrestasiPesertaDidiks\Pages;

use App\Filament\Resources\PrestasiPesertaDidiks\PrestasiPesertaDidikResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPrestasiPesertaDidiks extends ListRecords
{
    protected static string $resource = PrestasiPesertaDidikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
