<?php

namespace App\Filament\Resources\Galeris\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
<<<<<<< Updated upstream
=======
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
>>>>>>> Stashed changes
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class GalerisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                SelectFilter::make('jenis')
                    ->options([
                        'sekolah' => 'Sekolah',
                        'pondok' => 'Pondok',
                    ])
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
