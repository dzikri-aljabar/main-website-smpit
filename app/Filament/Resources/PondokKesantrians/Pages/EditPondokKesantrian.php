<?php

namespace App\Filament\Resources\PondokKesantrians\Pages;

use App\Filament\Resources\PondokKesantrians\PondokKesantrianResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPondokKesantrian extends EditRecord
{
    protected static string $resource = PondokKesantrianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
