<?php

namespace App\Filament\Admin\Resources\InstagramSections\Tables;

use App\Models\InstagramSection;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class InstagramSectionsTable
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
                    'handle'
                )
                    ->label(
                        'Instagram Handle'
                    )
                    ->searchable()
                    ->sortable(),


                TextColumn::make(
                    'posts_count'
                )
                    ->label(
                        'Posts'
                    )
                    ->getStateUsing(
                        fn (
                            InstagramSection $record
                        ): int =>
                            count(
                                $record->posts
                                ?? []
                            )
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


            ->filters([

                TernaryFilter::make(
                    'is_active'
                )
                    ->label(
                        'Section Status'
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