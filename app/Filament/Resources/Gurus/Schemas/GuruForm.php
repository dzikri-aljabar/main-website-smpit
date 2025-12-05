<?php

namespace App\Filament\Resources\Gurus\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class GuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('konten')
                    ->label('Konten Profil Guru')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
