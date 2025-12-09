<?php

namespace App\Filament\Resources\Skls;

use App\Filament\Resources\Skls\Pages\CreateSkl;
use App\Filament\Resources\Skls\Pages\EditSkl;
use App\Filament\Resources\Skls\Pages\ListSkls;
use App\Filament\Resources\Skls\Schemas\SklForm;
use App\Filament\Resources\Skls\Tables\SklsTable;
use App\Models\Skl;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class SklResource extends Resource
{
    protected static ?string $model = Skl::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    protected static ?string $recordTitleAttribute = 'Skl';

    protected static string | UnitEnum | null $navigationGroup = 'Profil';

    public static function form(Schema $schema): Schema
    {
        return SklForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SklsTable::configure($table);
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
            'index' => ListSkls::route('/'),
            'create' => CreateSkl::route('/create'),
            'edit' => EditSkl::route('/{record}/edit'),
        ];
    }
}
