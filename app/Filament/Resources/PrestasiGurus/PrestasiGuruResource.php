<?php

namespace App\Filament\Resources\PrestasiGurus;

use App\Filament\Resources\PrestasiGurus\Pages\CreatePrestasiGuru;
use App\Filament\Resources\PrestasiGurus\Pages\EditPrestasiGuru;
use App\Filament\Resources\PrestasiGurus\Pages\ListPrestasiGurus;
use App\Filament\Resources\PrestasiGurus\Schemas\PrestasiGuruForm;
use App\Filament\Resources\PrestasiGurus\Tables\PrestasiGurusTable;
use App\Models\PrestasiGuru;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PrestasiGuruResource extends Resource
{
    protected static ?string $model = PrestasiGuru::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Prestasi Guru';

    public static function form(Schema $schema): Schema
    {
        return PrestasiGuruForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrestasiGurusTable::configure($table);
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
            'index' => ListPrestasiGurus::route('/'),
            'create' => CreatePrestasiGuru::route('/create'),
            'edit' => EditPrestasiGuru::route('/{record}/edit'),
        ];
    }
}
