<?php

namespace App\Filament\Admin\Resources\ShishaShowcaseSettings\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ShishaShowcaseSettingsTable
{
    public static function configure(
        Table $table
    ): Table {
        return $table

            ->columns([

                TextColumn::make(
                    'title_en'
                )
                    ->label(
                        'Shisha Showcase'
                    )
                    ->searchable()
                    ->wrap()
                    ->limit(
                        70
                    ),


                TextColumn::make(
                    'eyebrow_en'
                )
                    ->label(
                        'Eyebrow'
                    )
                    ->visibleFrom(
                        'md'
                    ),


                IconColumn::make(
                    'is_active'
                )
                    ->label(
                        'Active'
                    )
                    ->boolean(),


                TextColumn::make(
                    'updated_at'
                )
                    ->label(
                        'Updated'
                    )
                    ->dateTime(
                        'd M Y, h:i A'
                    )
                    ->sortable()
                    ->visibleFrom(
                        'lg'
                    ),

            ])


            ->recordActions([

                EditAction::make()
                    ->label(
                        'Edit'
                    ),


                DeleteAction::make()
                    ->label(
                        'Delete'
                    )
                    ->requiresConfirmation(),

            ])


            ->defaultSort(
                'updated_at',
                'desc'
            );
    }
}