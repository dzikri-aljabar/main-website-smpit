<?php

namespace App\Filament\Resources\PrestasiPesertaDidiks\Pages;

use App\Filament\Resources\PrestasiPesertaDidiks\PrestasiPesertaDidikResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPrestasiPesertaDidik extends EditRecord
{
    protected static string $resource = PrestasiPesertaDidikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
