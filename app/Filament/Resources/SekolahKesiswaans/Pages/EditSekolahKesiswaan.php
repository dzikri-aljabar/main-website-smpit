<?php

namespace App\Filament\Resources\SekolahKesiswaans\Pages;

use App\Filament\Resources\SekolahKesiswaans\SekolahKesiswaanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSekolahKesiswaan extends EditRecord
{
    protected static string $resource = SekolahKesiswaanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
