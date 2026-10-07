<?php

namespace App\Filament\Admin\Resources\BlogPosts\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class BlogPostsTable
{
    public static function configure(
        Table $table
    ): Table {
        return $table

            ->columns([

                ImageColumn::make(
                    'featured_image'
                )
                    ->label(
                        'Image'
                    )
                    ->disk(
                        'public'
                    )
                    ->square(),


                TextColumn::make(
                    'title'
                )
                    ->label(
                        'Post Title'
                    )
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(60),


                TextColumn::make(
                    'category'
                )
                    ->label(
                        'Category'
                    )
                    ->badge()
                    ->searchable(),


                TextColumn::make(
                    'focus_keyword'
                )
                    ->label(
                        'Focus Keyword'
                    )
                    ->searchable()
                    ->limit(35)
                    ->visibleFrom('lg'),


                TextColumn::make(
                    'status'
                )
                    ->label(
                        'Status'
                    )
                    ->badge()
                    ->color(
                        fn (string $state): string =>
                            match ($state) {

                                'published' =>
                                    'success',

                                'draft' =>
                                    'warning',

                                default =>
                                    'gray',
                            }
                    ),


                IconColumn::make(
                    'is_active'
                )
                    ->label(
                        'Active'
                    )
                    ->boolean(),


                TextColumn::make(
                    'published_at'
                )
                    ->label(
                        'Published'
                    )
                    ->dateTime(
                        'd M Y, h:i A'
                    )
                    ->sortable()
                    ->placeholder(
                        'Not published'
                    )
                    ->visibleFrom('lg'),


                TextColumn::make(
                    'updated_at'
                )
                    ->label(
                        'Updated'
                    )
                    ->dateTime(
                        'd M Y'
                    )
                    ->sortable()
                    ->visibleFrom('xl'),

            ])


            ->filters([

                SelectFilter::make(
                    'status'
                )
                    ->options([

                        'draft' =>
                            'Draft',

                        'published' =>
                            'Published',

                    ]),

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


            ->toolbarActions([

                BulkActionGroup::make([

                    DeleteBulkAction::make(),

                ]),

            ])


            ->defaultSort(
                'created_at',
                'desc'
            );
    }
}