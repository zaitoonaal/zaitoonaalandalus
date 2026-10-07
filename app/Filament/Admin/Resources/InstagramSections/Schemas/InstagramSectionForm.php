<?php

namespace App\Filament\Admin\Resources\InstagramSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InstagramSectionForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema

            ->components([

                /*
                |--------------------------------------------------------------------------
                | INSTAGRAM PROFILE
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Instagram Profile'
                )
                    ->description(
                        'Manage the Instagram profile link and handle shown above the homepage image grid.'
                    )
                    ->columns(2)

                    ->schema([

                        TextInput::make(
                            'handle'
                        )
                            ->label(
                                'Instagram Handle'
                            )
                            ->default(
                                '@ZAITOONAALANDALUS'
                            )
                            ->placeholder(
                                '@ZAITOONAALANDALUS'
                            )
                            ->required()
                            ->maxLength(
                                100
                            ),


                        TextInput::make(
                            'profile_url'
                        )
                            ->label(
                                'Instagram Profile URL'
                            )
                            ->url()
                            ->placeholder(
                                'https://www.instagram.com/zaitoonaalandalus/'
                            )
                            ->maxLength(
                                500
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | INSTAGRAM POSTS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Instagram Posts'
                )
                    ->description(
                        'Create, edit, delete and reorder the images displayed in the homepage Instagram grid.'
                    )

                    ->schema([

                        Repeater::make(
                            'posts'
                        )
                            ->label(
                                'Instagram Grid Posts'
                            )

                            ->schema([

                                /*
                                |--------------------------------------------------------------------------
                                | UPLOADED IMAGE
                                |--------------------------------------------------------------------------
                                */

                                FileUpload::make(
                                    'image'
                                )
                                    ->label(
                                        'Upload Image'
                                    )
                                    ->image()
                                    ->disk(
                                        'public'
                                    )
                                    ->directory(
                                        'instagram-grid'
                                    )
                                    ->visibility(
                                        'public'
                                    )
                                    ->maxSize(
                                        5120
                                    )
                                    ->helperText(
                                        'Upload an image here or use the external image URL below.'
                                    ),


                                /*
                                |--------------------------------------------------------------------------
                                | EXTERNAL IMAGE
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make(
                                    'image_url'
                                )
                                    ->label(
                                        'External Image URL'
                                    )
                                    ->url()
                                    ->placeholder(
                                        'https://images.unsplash.com/...'
                                    )
                                    ->helperText(
                                        'Used only when no uploaded image exists.'
                                    ),


                                /*
                                |--------------------------------------------------------------------------
                                | INSTAGRAM POST URL
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make(
                                    'post_url'
                                )
                                    ->label(
                                        'Instagram Post URL'
                                    )
                                    ->url()
                                    ->placeholder(
                                        'https://www.instagram.com/p/...'
                                    )
                                    ->maxLength(
                                        500
                                    ),


                                /*
                                |--------------------------------------------------------------------------
                                | ALT TEXT
                                |--------------------------------------------------------------------------
                                */

                                TextInput::make(
                                    'alt_en'
                                )
                                    ->label(
                                        'Image Alt Text - English'
                                    )
                                    ->placeholder(
                                        'Zaitoona Al Andalus restaurant in Doha'
                                    )
                                    ->maxLength(
                                        255
                                    ),


                                TextInput::make(
                                    'alt_ar'
                                )
                                    ->label(
                                        'Image Alt Text - Arabic'
                                    )
                                    ->maxLength(
                                        255
                                    ),


                                /*
                                |--------------------------------------------------------------------------
                                | ACTIVE
                                |--------------------------------------------------------------------------
                                */

                                Toggle::make(
                                    'is_active'
                                )
                                    ->label(
                                        'Show This Post'
                                    )
                                    ->default(
                                        true
                                    ),

                            ])

                            ->columns(2)

                            ->defaultItems(0)

                            ->addActionLabel(
                                'Add Instagram Post'
                            )

                            ->reorderable()

                            ->collapsible()

                            ->cloneable()

                            ->itemLabel(
                                fn (
                                    array $state
                                ): ?string =>
                                    $state['alt_en']
                                    ?? 'Instagram Post'
                            )

                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | SECTION SETTINGS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Display Settings'
                )
                    ->columns(2)

                    ->schema([

                        TextInput::make(
                            'sort_order'
                        )
                            ->label(
                                'Section Sort Order'
                            )
                            ->numeric()
                            ->minValue(
                                0
                            )
                            ->default(
                                0
                            )
                            ->required(),


                        Toggle::make(
                            'is_active'
                        )
                            ->label(
                                'Show Instagram Section'
                            )
                            ->default(
                                true
                            ),

                    ]),

            ]);
    }
}