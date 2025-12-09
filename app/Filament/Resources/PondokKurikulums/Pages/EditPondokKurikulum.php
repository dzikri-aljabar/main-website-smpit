<?php

namespace App\Filament\Resources\PondokKurikulums\Pages;

use App\Filament\Resources\PondokKurikulums\PondokKurikulumResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPondokKurikulum extends EditRecord
{
    protected static string $resource = PondokKurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
