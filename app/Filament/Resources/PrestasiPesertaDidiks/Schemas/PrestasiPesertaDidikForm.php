<?php

namespace App\Filament\Resources\PrestasiPesertaDidiks\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class PrestasiPesertaDidikForm
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
