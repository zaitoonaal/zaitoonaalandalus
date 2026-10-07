<?php

namespace App\Filament\Admin\Resources\ContactPageSettings\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactPageSettingsTable
{
    public static function configure(
        Table $table
    ): Table {
        return $table
            ->columns([

                TextColumn::make(
                    'hero_title_en'
                )
                    ->label(
                        'Contact Page'
                    )
                    ->searchable(),

                IconColumn::make(
                    'is_active'
                )
                    ->label('Active')
                    ->boolean(),

                TextColumn::make(
                    'updated_at'
                )
                    ->label(
                        'Last Updated'
                    )
                    ->dateTime()
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}