<?php

namespace App\Filament\Resources\PondokKurikulums;

use App\Filament\Resources\PondokKurikulums\Pages\CreatePondokKurikulum;
use App\Filament\Resources\PondokKurikulums\Pages\EditPondokKurikulum;
use App\Filament\Resources\PondokKurikulums\Pages\ListPondokKurikulums;
use App\Filament\Resources\PondokKurikulums\Schemas\PondokKurikulumForm;
use App\Filament\Resources\PondokKurikulums\Tables\PondokKurikulumsTable;
use App\Models\PondokKurikulum;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PondokKurikulumResource extends Resource
{
    protected static ?string $model = PondokKurikulum::class;

    protected static string|BackedEnum|null $navigationIcon = 'phosphor-mosque';

    protected static ?string $recordTitleAttribute = 'Kurikulum';

    protected static string | UnitEnum | null $navigationGroup = 'Program';

    public static function form(Schema $schema): Schema
    {
        return PondokKurikulumForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PondokKurikulumsTable::configure($table);
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
            'index' => ListPondokKurikulums::route('/'),
            'create' => CreatePondokKurikulum::route('/create'),
            'edit' => EditPondokKurikulum::route('/{record}/edit'),
        ];
    }
}
