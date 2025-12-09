<?php

namespace App\Filament\Resources\PrestasiGurus\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class PrestasiGuruForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('konten')
                    ->label('Konten Prestasi Guru')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
