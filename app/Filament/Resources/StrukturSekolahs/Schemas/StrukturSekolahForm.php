<?php

namespace App\Filament\Resources\StrukturSekolahs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StrukturSekolahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama')
                    ->required(),
                Select::make('jabatan')
                    ->label('Jabatan')
                    ->required()
                    ->options([
                        'Kepala Sekolah' => 'Kepala Sekolah',
                        'Kepala Pondok' => 'Kepala Pondok',
                    ]),
                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->nullable()
                    ->columnSpanFull(),
                FileUpload::make('path')
                    ->label('Upload Gambar')
                    ->required()
                    ->directory('struktur-sekolah')
                    ->disk('public')
                    ->columnSpanFull(),
            ]);
    }
}
