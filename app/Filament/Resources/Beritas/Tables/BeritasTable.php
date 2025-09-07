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
                    ->searchable()
                    ->limit(35),
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
                Action::make('copy-link')
                    ->label('Copy Link')
                    ->color('info')
                    ->icon('heroicon-o-clipboard')
                    ->action(
                        fn($record) =>
                        Notification::make()
                            ->title('Link berhasil disalin')
                            ->success()
                            ->send()
                    )
                    ->extraAttributes(fn($record) => [
                        'x-data' => "{ link: '" . url('/berita/' . $record->slug) . "' }",
                        'x-on:click' => "navigator.clipboard.writeText(link)",
                    ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
