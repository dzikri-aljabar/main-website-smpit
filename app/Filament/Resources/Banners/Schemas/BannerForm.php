<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->label('Nama Banner')
                    ->required(),
                FileUpload::make('path')
                    ->label('Gambar Banner')
                    ->disk('public')
                    ->directory('banners')
                    ->required(),
            ]);
    }
}
