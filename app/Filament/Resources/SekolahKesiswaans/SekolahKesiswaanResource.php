<?php

namespace App\Filament\Resources\SekolahKesiswaans;

use App\Filament\Resources\SekolahKesiswaans\Pages\CreateSekolahKesiswaan;
use App\Filament\Resources\SekolahKesiswaans\Pages\EditSekolahKesiswaan;
use App\Filament\Resources\SekolahKesiswaans\Pages\ListSekolahKesiswaans;
use App\Filament\Resources\SekolahKesiswaans\Schemas\SekolahKesiswaanForm;
use App\Filament\Resources\SekolahKesiswaans\Tables\SekolahKesiswaansTable;
use App\Models\SekolahKesiswaan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SekolahKesiswaanResource extends Resource
{
    protected static ?string $model = SekolahKesiswaan::class;

    protected static string|BackedEnum|null $navigationIcon = 'bxs-school';

    protected static ?string $recordTitleAttribute = 'Kesiswaan';

    protected static string | UnitEnum | null $navigationGroup = 'Program';

    public static function form(Schema $schema): Schema
    {
        return SekolahKesiswaanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SekolahKesiswaansTable::configure($table);
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
            'index' => ListSekolahKesiswaans::route('/'),
            'create' => CreateSekolahKesiswaan::route('/create'),
            'edit' => EditSekolahKesiswaan::route('/{record}/edit'),
        ];
    }
}
