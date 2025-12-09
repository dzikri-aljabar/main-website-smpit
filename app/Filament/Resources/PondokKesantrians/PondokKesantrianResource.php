<?php

namespace App\Filament\Resources\PondokKesantrians;

use App\Filament\Resources\PondokKesantrians\Pages\CreatePondokKesantrian;
use App\Filament\Resources\PondokKesantrians\Pages\EditPondokKesantrian;
use App\Filament\Resources\PondokKesantrians\Pages\ListPondokKesantrians;
use App\Filament\Resources\PondokKesantrians\Schemas\PondokKesantrianForm;
use App\Filament\Resources\PondokKesantrians\Tables\PondokKesantriansTable;
use App\Models\PondokKesantrian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PondokKesantrianResource extends Resource
{
    protected static ?string $model = PondokKesantrian::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Kesantrian';

    public static function form(Schema $schema): Schema
    {
        return PondokKesantrianForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PondokKesantriansTable::configure($table);
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
            'index' => ListPondokKesantrians::route('/'),
            'create' => CreatePondokKesantrian::route('/create'),
            'edit' => EditPondokKesantrian::route('/{record}/edit'),
        ];
    }
}
