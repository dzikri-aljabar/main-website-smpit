<?php

namespace App\Filament\Resources\PrestasiPesertaDidiks;

use App\Filament\Resources\PrestasiPesertaDidiks\Pages\CreatePrestasiPesertaDidik;
use App\Filament\Resources\PrestasiPesertaDidiks\Pages\EditPrestasiPesertaDidik;
use App\Filament\Resources\PrestasiPesertaDidiks\Pages\ListPrestasiPesertaDidiks;
use App\Filament\Resources\PrestasiPesertaDidiks\Schemas\PrestasiPesertaDidikForm;
use App\Filament\Resources\PrestasiPesertaDidiks\Tables\PrestasiPesertaDidiksTable;
use App\Models\PrestasiPesertaDidik;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PrestasiPesertaDidikResource extends Resource
{
    protected static ?string $model = PrestasiPesertaDidik::class;

    protected static string|BackedEnum|null $navigationIcon = 'ri-medal-line';

    protected static ?string $recordTitleAttribute = 'Peserta Didik';

    protected static string | UnitEnum | null $navigationGroup = 'Prestasi';

    public static function form(Schema $schema): Schema
    {
        return PrestasiPesertaDidikForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrestasiPesertaDidiksTable::configure($table);
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
            'index' => ListPrestasiPesertaDidiks::route('/'),
            'create' => CreatePrestasiPesertaDidik::route('/create'),
            'edit' => EditPrestasiPesertaDidik::route('/{record}/edit'),
        ];
    }
}
