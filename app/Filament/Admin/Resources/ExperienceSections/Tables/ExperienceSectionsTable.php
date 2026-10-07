<?php

namespace App\Filament\Admin\Resources\ExperienceSections\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class ExperienceSectionsTable
{
    public static function configure(
        Table $table
    ): Table {
        return $table

            ->columns([

                TextColumn::make(
                    'sort_order'
                )
                    ->label(
                        '#'
                    )
                    ->sortable(),


                TextColumn::make(
                    'eyebrow_en'
                )
                    ->label(
                        'Eyebrow'
                    )
                    ->searchable()
                    ->visibleFrom(
                        'md'
                    ),


                TextColumn::make(
                    'title_en'
                )
                    ->label(
                        'Title'
                    )
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(
                        55
                    ),


                TextColumn::make(
                    'button_style'
                )
                    ->label(
                        'Button'
                    )
                    ->badge()
                    ->formatStateUsing(
                        fn (
                            ?string $state
                        ): string =>
                            $state === 'primary'
                                ? 'Primary'
                                : 'Outline'
                    )
                    ->visibleFrom(
                        'lg'
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
                        'xl'
                    ),

            ])


            ->filters([

                TernaryFilter::make(
                    'is_active'
                )
                    ->label(
                        'Homepage Status'
                    )
                    ->placeholder(
                        'All'
                    )
                    ->trueLabel(
                        'Active'
                    )
                    ->falseLabel(
                        'Hidden'
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
                'sort_order',
                'asc'
            );
    }
}