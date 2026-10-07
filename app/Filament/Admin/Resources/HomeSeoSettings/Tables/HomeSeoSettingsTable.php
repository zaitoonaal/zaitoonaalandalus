<?php

namespace App\Filament\Admin\Resources\HomeSeoSettings\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HomeSeoSettingsTable
{
    public static function configure(
        Table $table
    ): Table {
        return $table

            ->columns([

                TextColumn::make(
                    'seo_title'
                )
                    ->label(
                        'Homepage SEO Title'
                    )
                    ->searchable()
                    ->wrap()
                    ->limit(70),


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
                        'Last Updated'
                    )
                    ->dateTime(
                        'd M Y, h:i A'
                    )
                    ->sortable(),

            ])

            ->recordActions([

                EditAction::make()
                    ->label(
                        'Edit SEO'
                    ),

            ])

            ->defaultSort(
                'updated_at',
                'desc'
            );
    }
}