<?php

namespace App\Filament\Admin\Resources\AboutSettings\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutSettingsTable
{
    public static function configure(
        Table $table
    ): Table {
        return $table

            /*
            |--------------------------------------------------------------------------
            | COLUMNS
            |--------------------------------------------------------------------------
            */

            ->columns([

                /*
                |--------------------------------------------------------------------------
                | INTRO TITLE EN
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'intro_title.en'
                )
                    ->label(
                        'Intro Title (EN)'
                    )
                    ->searchable()
                    ->limit(35)
                    ->wrap(),


                /*
                |--------------------------------------------------------------------------
                | INTRO TITLE AR
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'intro_title.ar'
                )
                    ->label(
                        'Intro Title (AR)'
                    )
                    ->searchable()
                    ->limit(35)
                    ->wrap()
                    ->visibleFrom(
                        'md'
                    ),


                /*
                |--------------------------------------------------------------------------
                | FEATURE IMAGE
                |--------------------------------------------------------------------------
                |
                | Supports:
                |
                | 1. Filament public disk uploads
                | 2. Full external image URLs
                | 3. /storage/... URLs
                | 4. storage/... URLs
                | 5. Array value if old data was saved as an array
                |
                */

                ImageColumn::make(
                    'feat1_image'
                )
                    ->label(
                        'Feature 1 Image'
                    )
                    ->getStateUsing(
                        function ($record): ?string {

                            /*
                            |--------------------------------------------------------------------------
                            | Get Stored Image
                            |--------------------------------------------------------------------------
                            */

                            $image =
                                $record->feat1_image;


                            /*
                            |--------------------------------------------------------------------------
                            | Handle Array Value
                            |--------------------------------------------------------------------------
                            */

                            if (
                                is_array(
                                    $image
                                )
                            ) {

                                $image =
                                    collect(
                                        $image
                                    )
                                        ->filter()
                                        ->first();

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | No Image
                            |--------------------------------------------------------------------------
                            */

                            if (
                                blank(
                                    $image
                                )
                            ) {

                                return null;

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | External URL
                            |--------------------------------------------------------------------------
                            */

                            if (
                                Str::startsWith(
                                    $image,
                                    [
                                        'http://',
                                        'https://',
                                    ]
                                )
                            ) {

                                return $image;

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Already /storage/... URL
                            |--------------------------------------------------------------------------
                            */

                            if (
                                Str::startsWith(
                                    $image,
                                    '/storage/'
                                )
                            ) {

                                return url(
                                    $image
                                );

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Already storage/... URL
                            |--------------------------------------------------------------------------
                            */

                            if (
                                Str::startsWith(
                                    $image,
                                    'storage/'
                                )
                            ) {

                                return url(
                                    '/'
                                    . ltrim(
                                        $image,
                                        '/'
                                    )
                                );

                            }


                            /*
                            |--------------------------------------------------------------------------
                            | Filament Public Disk File
                            |--------------------------------------------------------------------------
                            */

                            return Storage::disk(
                                'public'
                            )->url(
                                ltrim(
                                    $image,
                                    '/'
                                )
                            );

                        }
                    )
                    ->square()
                    ->size(
                        60
                    )
                    ->visibleFrom(
                        'sm'
                    ),


                /*
                |--------------------------------------------------------------------------
                | LAST UPDATED
                |--------------------------------------------------------------------------
                */

                TextColumn::make(
                    'updated_at'
                )
                    ->label(
                        'Last Updated'
                    )
                    ->dateTime(
                        'd M Y h:i A'
                    )
                    ->sortable()
                    ->visibleFrom(
                        'lg'
                    ),

            ])


            /*
            |--------------------------------------------------------------------------
            | DEFAULT SORT
            |--------------------------------------------------------------------------
            */

            ->defaultSort(
                'updated_at',
                'desc'
            )


            /*
            |--------------------------------------------------------------------------
            | RECORD ACTIONS
            |--------------------------------------------------------------------------
            */

            ->recordActions([

                ActionGroup::make([

                    /*
                    |--------------------------------------------------------------------------
                    | EDIT
                    |--------------------------------------------------------------------------
                    */

                    EditAction::make()
                        ->label(
                            'Edit About Setting'
                        )
                        ->icon(
                            'heroicon-o-pencil-square'
                        )
                        ->color(
                            'warning'
                        ),


                    /*
                    |--------------------------------------------------------------------------
                    | DELETE
                    |--------------------------------------------------------------------------
                    */

                    DeleteAction::make()
                        ->label(
                            'Delete About Setting'
                        )
                        ->icon(
                            'heroicon-o-trash'
                        )
                        ->color(
                            'danger'
                        )
                        ->requiresConfirmation(),

                ])
                    ->color(
                        'gray'
                    ),

            ]);
    }
}