<?php

namespace App\Filament\Admin\Resources\HeroSections\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HeroSectionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('kicker_en')
                    ->label('Hero Section')
                    ->searchable(),

                TextColumn::make('title_line_1_en')
                    ->label('Main Heading'),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('d M Y, h:i A')
                    ->sortable(),
            ])

            ->recordActions([
                EditAction::make()
                    ->label('Edit Hero'),
            ])

            ->defaultSort('updated_at', 'desc');
    }
}