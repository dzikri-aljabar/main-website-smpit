<?php

namespace App\Filament\Resources\Galeris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

use function Laravel\Prompts\select;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul')
                    ->live(debounce: 800)
                    ->afterStateUpdated(fn(callable $set, $state) => $set('slug', \Str::slug($state))),
                TextInput::make('slug')
                    ->label('Slug')
                    ->disabled(),
                TextInput::make('alt')
                    ->label('Alt Text Gambar'),
                Select::make('jenis')
                    ->label('Jenis Galeri')
                    ->options([
                        'sekolah' => 'Sekolah',
                        'pondok' => 'Pondok',
                    ])
                    ->required(),
                FileUpload::make('path')
                    ->label('Upload Gambar')
                    ->required()
                    ->directory('galeri')
                    ->disk('public')
                    ->columnSpanFull(),
            ]);
    }
}
