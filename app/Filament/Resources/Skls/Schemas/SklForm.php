<?php

namespace App\Filament\Resources\Skls\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class SklForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('konten')
                    ->label('Konten SKL')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
