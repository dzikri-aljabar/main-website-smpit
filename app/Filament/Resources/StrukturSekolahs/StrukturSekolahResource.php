<?php

namespace App\Filament\Resources\StrukturSekolahs;

use App\Filament\Resources\StrukturSekolahs\Pages\CreateStrukturSekolah;
use App\Filament\Resources\StrukturSekolahs\Pages\EditStrukturSekolah;
use App\Filament\Resources\StrukturSekolahs\Pages\ListStrukturSekolahs;
use App\Filament\Resources\StrukturSekolahs\Schemas\StrukturSekolahForm;
use App\Filament\Resources\StrukturSekolahs\Tables\StrukturSekolahsTable;
use App\Models\StrukturSekolah;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StrukturSekolahResource extends Resource
{
    protected static ?string $model = StrukturSekolah::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Struktur Sekolah';

    protected static ?string $navigationLabel = 'Struktur Sekolah';

    public static function form(Schema $schema): Schema
    {
        return StrukturSekolahForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StrukturSekolahsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStrukturSekolahs::route('/'),
            'create' => CreateStrukturSekolah::route('/create'),
            'edit' => EditStrukturSekolah::route('/{record}/edit'),
        ];
    }
}
