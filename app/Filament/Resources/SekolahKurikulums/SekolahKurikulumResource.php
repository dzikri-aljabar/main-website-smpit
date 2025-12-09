<?php

namespace App\Filament\Resources\SekolahKurikulums;

use App\Filament\Resources\SekolahKurikulums\Pages\CreateSekolahKurikulum;
use App\Filament\Resources\SekolahKurikulums\Pages\EditSekolahKurikulum;
use App\Filament\Resources\SekolahKurikulums\Pages\ListSekolahKurikulums;
use App\Filament\Resources\SekolahKurikulums\Schemas\SekolahKurikulumForm;
use App\Filament\Resources\SekolahKurikulums\Tables\SekolahKurikulumsTable;
use App\Models\SekolahKurikulum;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SekolahKurikulumResource extends Resource
{
    protected static ?string $model = SekolahKurikulum::class;

    protected static string|BackedEnum|null $navigationIcon = 'bxs-school';

    protected static ?string $recordTitleAttribute = 'Kurikulum';

    protected static string | UnitEnum | null $navigationGroup = 'Program';

    public static function form(Schema $schema): Schema
    {
        return SekolahKurikulumForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SekolahKurikulumsTable::configure($table);
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
            'index' => ListSekolahKurikulums::route('/'),
            'create' => CreateSekolahKurikulum::route('/create'),
            'edit' => EditSekolahKurikulum::route('/{record}/edit'),
        ];
    }
}
