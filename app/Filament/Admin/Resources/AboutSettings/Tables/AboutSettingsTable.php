<?php

namespace App\Filament\Admin\Resources\AboutSettings\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                
                TextColumn::make('intro_title.en')
                    ->label('Intro Title (EN)')
                    ->searchable()
                    ->limit(50),

                TextColumn::make('intro_title.ar')
                    ->label('Intro Title (AR)')
                    ->searchable()
                    ->limit(50),

                ImageColumn::make('feat1_image')
                    ->label('Feature 1 Image')
                    ->square(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ]);
    }
}