<?php

namespace App\Filament\Resources\VisiMisis\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class VisiMisiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('konten')
                    ->label('Konten Visi & Misi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
