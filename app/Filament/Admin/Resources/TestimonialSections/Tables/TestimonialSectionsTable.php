<?php

namespace App\Filament\Admin\Resources\TestimonialSections\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestimonialSectionsTable
{
    public static function configure(
        Table $table
    ): Table {
        return $table

            ->columns([

                TextColumn::make(
                    'eyebrow_en'
                )
                    ->label(
                        'Section'
                    )
                    ->searchable()
                    ->wrap(),


                TextColumn::make(
                    'testimonials'
                )
                    ->label(
                        'Testimonials'
                    )
                    ->formatStateUsing(
                        fn ($state): string =>
                            is_array($state)
                                ? count($state) . ' testimonials'
                                : '0 testimonials'
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
                        'Edit Section'
                    ),


                DeleteAction::make()
                    ->label(
                        'Delete Section'
                    )
                    ->requiresConfirmation(),

            ])

            ->defaultSort(
                'updated_at',
                'desc'
            );
    }
}