<?php

namespace App\Filament\Admin\Resources\BlogPosts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
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

            /*
            |--------------------------------------------------------------------------
            | Columns
            |--------------------------------------------------------------------------
            */

            ->columns([

                /*
                |--------------------------------------------------------------------------
                | Featured Image
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | English Title
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Arabic Title
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'title_ar'
                )
                    ->label(
                        'Arabic Title'
                    )
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(60)
                    ->placeholder(
                        'Not added'
                    )
                    ->visibleFrom(
                        'lg'
                    ),


                /*
                |--------------------------------------------------------------------------
                | English Category
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'category'
                )
                    ->label(
                        'Category'
                    )
                    ->badge()
                    ->searchable()
                    ->placeholder(
                        'No category'
                    ),


                /*
                |--------------------------------------------------------------------------
                | Arabic Category
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'category_ar'
                )
                    ->label(
                        'Arabic Category'
                    )
                    ->badge()
                    ->searchable()
                    ->placeholder(
                        'Not added'
                    )
                    ->visibleFrom(
                        'xl'
                    ),


                /*
                |--------------------------------------------------------------------------
                | English Focus Keyword
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'focus_keyword'
                )
                    ->label(
                        'Focus Keyword'
                    )
                    ->searchable()
                    ->limit(35)
                    ->placeholder(
                        'Not added'
                    )
                    ->visibleFrom(
                        'lg'
                    ),


                /*
                |--------------------------------------------------------------------------
                | Arabic Focus Keyword
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'focus_keyword_ar'
                )
                    ->label(
                        'Arabic Focus Keyword'
                    )
                    ->searchable()
                    ->limit(35)
                    ->placeholder(
                        'Not added'
                    )
                    ->visibleFrom(
                        'xl'
                    ),


                /*
                |--------------------------------------------------------------------------
                | English SEO Title
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'seo_title'
                )
                    ->label(
                        'SEO Title'
                    )
                    ->searchable()
                    ->limit(45)
                    ->placeholder(
                        'Uses post title'
                    )
                    ->visibleFrom(
                        'xl'
                    ),


                /*
                |--------------------------------------------------------------------------
                | Arabic SEO Title
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'seo_title_ar'
                )
                    ->label(
                        'Arabic SEO Title'
                    )
                    ->searchable()
                    ->limit(45)
                    ->placeholder(
                        'Uses Arabic title'
                    )
                    ->visibleFrom(
                        'xl'
                    ),


                /*
                |--------------------------------------------------------------------------
                | Status
                |--------------------------------------------------------------------------
                */

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


                /*
                |--------------------------------------------------------------------------
                | Active
                |--------------------------------------------------------------------------
                */

                IconColumn::make(
                    'is_active'
                )
                    ->label(
                        'Active'
                    )
                    ->boolean(),


                /*
                |--------------------------------------------------------------------------
                | Published Date
                |--------------------------------------------------------------------------
                */

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
                    ->visibleFrom(
                        'lg'
                    ),


                /*
                |--------------------------------------------------------------------------
                | Updated Date
                |--------------------------------------------------------------------------
                */

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
                    ->visibleFrom(
                        'xl'
                    ),

            ])


            /*
            |--------------------------------------------------------------------------
            | Filters
            |--------------------------------------------------------------------------
            */

            ->filters([

                /*
                |--------------------------------------------------------------------------
                | Status Filter
                |--------------------------------------------------------------------------
                */

                SelectFilter::make(
                    'status'
                )
                    ->label(
                        'Status'
                    )
                    ->options([

                        'draft' =>
                            'Draft',

                        'published' =>
                            'Published',

                    ]),


                /*
                |--------------------------------------------------------------------------
                | Active Filter
                |--------------------------------------------------------------------------
                */

                SelectFilter::make(
                    'is_active'
                )
                    ->label(
                        'Active Status'
                    )
                    ->options([

                        '1' =>
                            'Active',

                        '0' =>
                            'Inactive',

                    ]),


                /*
                |--------------------------------------------------------------------------
                | Category Filter
                |--------------------------------------------------------------------------
                */

                SelectFilter::make(
                    'category'
                )
                    ->label(
                        'Category'
                    )
                    ->options(
                        fn (): array =>
                            \App\Models\BlogPost::query()

                                ->whereNotNull(
                                    'category'
                                )

                                ->where(
                                    'category',
                                    '!=',
                                    ''
                                )

                                ->distinct()

                                ->orderBy(
                                    'category'
                                )

                                ->pluck(
                                    'category',
                                    'category'
                                )

                                ->toArray()
                    ),


                /*
                |--------------------------------------------------------------------------
                | Arabic Category Filter
                |--------------------------------------------------------------------------
                */

                SelectFilter::make(
                    'category_ar'
                )
                    ->label(
                        'Arabic Category'
                    )
                    ->options(
                        fn (): array =>
                            \App\Models\BlogPost::query()

                                ->whereNotNull(
                                    'category_ar'
                                )

                                ->where(
                                    'category_ar',
                                    '!=',
                                    ''
                                )

                                ->distinct()

                                ->orderBy(
                                    'category_ar'
                                )

                                ->pluck(
                                    'category_ar',
                                    'category_ar'
                                )

                                ->toArray()
                    ),

            ])


            /*
            |--------------------------------------------------------------------------
            | Record Actions
            |--------------------------------------------------------------------------
            */

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


            /*
            |--------------------------------------------------------------------------
            | Toolbar Actions
            |--------------------------------------------------------------------------
            */

            ->toolbarActions([

                BulkActionGroup::make([

                    DeleteBulkAction::make(),

                ]),

            ])


            /*
            |--------------------------------------------------------------------------
            | Default Sorting
            |--------------------------------------------------------------------------
            */

            ->defaultSort(
                'created_at',
                'desc'
            );
    }
}