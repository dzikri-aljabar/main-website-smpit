<?php

namespace App\Filament\Resources\PondokKurikulums\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;

class PondokKurikulumForm
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
