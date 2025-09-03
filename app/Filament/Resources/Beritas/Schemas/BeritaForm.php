<?php

namespace App\Filament\Resources\Beritas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required()
                    ->live(debounce: 800)
                    ->afterStateUpdated(fn (callable $set, $state) => $set('slug', \Str::slug($state))),
                TextInput::make('slug')
                    ->required()
                    ->disabled(),
                RichEditor::make('konten')
                    ->required()
                    ->columnSpanFull()
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('berita/konten')
                    ->fileAttachmentsVisibility('public')
                    ->rules(['max:5120']),
                FileUpload::make('gambar')
                    ->default(null)
                    ->image()
                    ->maxSize(1024)
                    ->directory('berita')
                    ->disk('public'),
            ]);
    }
}
