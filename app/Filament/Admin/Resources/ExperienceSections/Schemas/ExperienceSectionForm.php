<?php

namespace App\Filament\Admin\Resources\ExperienceSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ExperienceSectionForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema

            ->components([

                /*
                |--------------------------------------------------------------------------
                | IMAGE
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Experience Image'
                )
                    ->description(
                        'Upload an image or use an external image URL. Uploaded image takes priority.'
                    )
                    ->columns(2)

                    ->schema([

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
                                'experience-sections'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(
                                5120
                            )
                            ->helperText(
                                'Recommended: high-quality landscape image.'
                            ),


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
                                'Optional. Used only when no uploaded image exists.'
                            ),


                        TextInput::make(
                            'image_alt_en'
                        )
                            ->label(
                                'Image Alt Text - English'
                            )
                            ->maxLength(
                                255
                            ),


                        TextInput::make(
                            'image_alt_ar'
                        )
                            ->label(
                                'Image Alt Text - Arabic'
                            )
                            ->maxLength(
                                255
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ENGLISH
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'English Content'
                )
                    ->columns(2)

                    ->schema([

                        TextInput::make(
                            'eyebrow_en'
                        )
                            ->label(
                                'Eyebrow'
                            )
                            ->placeholder(
                                'Culinary mastery'
                            )
                            ->maxLength(
                                150
                            ),


                        TextInput::make(
                            'title_en'
                        )
                            ->label(
                                'Title'
                            )
                            ->required()
                            ->placeholder(
                                'Made for sharing, remembered for flavour.'
                            )
                            ->maxLength(
                                255
                            ),


                        Textarea::make(
                            'description_en'
                        )
                            ->label(
                                'Description'
                            )
                            ->rows(
                                4
                            )
                            ->columnSpanFull(),


                        TextInput::make(
                            'list_1_en'
                        )
                            ->label(
                                'List Item 1'
                            )
                            ->maxLength(
                                255
                            ),


                        TextInput::make(
                            'list_2_en'
                        )
                            ->label(
                                'List Item 2'
                            )
                            ->maxLength(
                                255
                            ),


                        TextInput::make(
                            'list_3_en'
                        )
                            ->label(
                                'List Item 3'
                            )
                            ->maxLength(
                                255
                            ),


                        TextInput::make(
                            'button_label_en'
                        )
                            ->label(
                                'Button Text'
                            )
                            ->placeholder(
                                'See signature menu'
                            )
                            ->maxLength(
                                100
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ARABIC
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Arabic Content'
                )
                    ->description(
                        'If an Arabic field is empty, the English value will be used automatically.'
                    )
                    ->columns(2)
                    ->collapsed()

                    ->schema([

                        TextInput::make(
                            'eyebrow_ar'
                        )
                            ->label(
                                'Eyebrow - Arabic'
                            )
                            ->maxLength(
                                150
                            ),


                        TextInput::make(
                            'title_ar'
                        )
                            ->label(
                                'Title - Arabic'
                            )
                            ->maxLength(
                                255
                            ),


                        Textarea::make(
                            'description_ar'
                        )
                            ->label(
                                'Description - Arabic'
                            )
                            ->rows(
                                4
                            )
                            ->columnSpanFull(),


                        TextInput::make(
                            'list_1_ar'
                        )
                            ->label(
                                'List Item 1 - Arabic'
                            )
                            ->maxLength(
                                255
                            ),


                        TextInput::make(
                            'list_2_ar'
                        )
                            ->label(
                                'List Item 2 - Arabic'
                            )
                            ->maxLength(
                                255
                            ),


                        TextInput::make(
                            'list_3_ar'
                        )
                            ->label(
                                'List Item 3 - Arabic'
                            )
                            ->maxLength(
                                255
                            ),


                        TextInput::make(
                            'button_label_ar'
                        )
                            ->label(
                                'Button Text - Arabic'
                            )
                            ->maxLength(
                                100
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | BUTTON
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Button'
                )
                    ->columns(2)

                    ->schema([

                        TextInput::make(
                            'button_url'
                        )
                            ->label(
                                'Button URL'
                            )
                            ->placeholder(
                                '/menu'
                            )
                            ->helperText(
                                'You can use /menu, /reserveatable, or a complete https:// URL.'
                            )
                            ->maxLength(
                                500
                            ),


                        Select::make(
                            'button_style'
                        )
                            ->label(
                                'Button Style'
                            )
                            ->options([

                                'outline' =>
                                    'Outline Button',

                                'primary' =>
                                    'Gold Primary Button',

                            ])
                            ->default(
                                'outline'
                            )
                            ->required(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | SETTINGS
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
                                'Sort Order'
                            )
                            ->numeric()
                            ->minValue(
                                0
                            )
                            ->default(
                                0
                            )
                            ->required()
                            ->helperText(
                                'Lower numbers appear first.'
                            ),


                        Toggle::make(
                            'is_active'
                        )
                            ->label(
                                'Show on Homepage'
                            )
                            ->default(
                                true
                            ),

                    ]),

            ]);
    }
}