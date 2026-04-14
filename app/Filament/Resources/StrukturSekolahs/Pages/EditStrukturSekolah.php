<?php

namespace App\Filament\Resources\StrukturSekolahs\Pages;

use App\Filament\Resources\StrukturSekolahs\StrukturSekolahResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStrukturSekolah extends EditRecord
{
    protected static string $resource = StrukturSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
