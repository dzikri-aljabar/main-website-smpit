<?php

namespace App\Filament\Resources\PrestasiGurus\Pages;

use App\Filament\Resources\PrestasiGurus\PrestasiGuruResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPrestasiGuru extends EditRecord
{
    protected static string $resource = PrestasiGuruResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
