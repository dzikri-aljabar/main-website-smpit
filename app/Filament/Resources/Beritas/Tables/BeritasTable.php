<?php

namespace App\Filament\Resources\Beritas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Table;

class BeritasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->searchable()
                    ->limit(35),
                TextColumn::make('slug')
                    ->label('Link')
                    ->formatStateUsing(
                        fn($state, $record) =>
                        $record->jenis . '/' . $state
                    )
                    ->copyable()
                    ->copyableState(fn($record) => match ($record->jenis) {
                        'berita' => route('berita.show', ['slug' => $record->slug]),
                        'artikel' => route('artikel.show', ['slug' => $record->slug]),
                        default => url('/' . $record->slug),
                    })
                    ->wrap(),
                TextColumn::make('jenis')
                    ->label('Jenis')
                    ->sortable(),
                TextColumn::make('penulis')
                    ->label('Penulis')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
