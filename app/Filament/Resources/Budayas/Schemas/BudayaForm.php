<?php

namespace App\Filament\Resources\Budayas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;

class BudayaForm
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
