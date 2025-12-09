<?php

namespace App\Filament\Resources\PondokKesantrians\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;

class PondokKesantrianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('konten')
                    ->label('Konten Budaya Sekolah')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
