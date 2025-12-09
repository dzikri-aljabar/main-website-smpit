<?php

namespace App\Filament\Resources\SekolahKurikulums\Pages;

use App\Filament\Resources\SekolahKurikulums\SekolahKurikulumResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSekolahKurikulum extends EditRecord
{
    protected static string $resource = SekolahKurikulumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
