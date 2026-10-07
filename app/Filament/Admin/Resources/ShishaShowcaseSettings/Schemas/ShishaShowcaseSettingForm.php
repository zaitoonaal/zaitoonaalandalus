<?php

namespace App\Filament\Admin\Resources\ShishaShowcaseSettings\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ShishaShowcaseSettingForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema

            ->components([

                /*
                |--------------------------------------------------------------------------
                | ENGLISH MAIN CONTENT
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'English Main Content'
                )
                    ->description(
                        'Main English content shown in the Shisha Showcase.'
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
                                'The shisha ritual'
                            )
                            ->maxLength(
                                150
                            ),


                        TextInput::make(
                            'title_en'
                        )
                            ->label(
                                'Main Title'
                            )
                            ->required()
                            ->placeholder(
                                'Prepared with care. Enjoyed without hurry.'
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

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ENGLISH CARDS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'English Shisha Cards'
                )
                    ->columns(2)

                    ->schema([

                        TextInput::make(
                            'card_1_title_en'
                        )
                            ->label(
                                'Card 1 Title'
                            )
                            ->placeholder(
                                'Classic'
                            ),


                        Textarea::make(
                            'card_1_text_en'
                        )
                            ->label(
                                'Card 1 Description'
                            )
                            ->rows(
                                3
                            ),


                        TextInput::make(
                            'card_2_title_en'
                        )
                            ->label(
                                'Card 2 Title'
                            )
                            ->placeholder(
                                'Signature'
                            ),


                        Textarea::make(
                            'card_2_text_en'
                        )
                            ->label(
                                'Card 2 Description'
                            )
                            ->rows(
                                3
                            ),


                        TextInput::make(
                            'card_3_title_en'
                        )
                            ->label(
                                'Card 3 Title'
                            )
                            ->placeholder(
                                'Premium'
                            ),


                        Textarea::make(
                            'card_3_text_en'
                        )
                            ->label(
                                'Card 3 Description'
                            )
                            ->rows(
                                3
                            ),


                        TextInput::make(
                            'card_4_title_en'
                        )
                            ->label(
                                'Card 4 Title'
                            )
                            ->placeholder(
                                'Fresh Head'
                            ),


                        Textarea::make(
                            'card_4_text_en'
                        )
                            ->label(
                                'Card 4 Description'
                            )
                            ->rows(
                                3
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ENGLISH LEGAL
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'English Legal Text'
                )
                    ->schema([

                        Textarea::make(
                            'legal_text_en'
                        )
                            ->label(
                                'Legal / Disclaimer'
                            )
                            ->rows(
                                3
                            )
                            ->placeholder(
                                'Shisha service is offered in accordance with applicable local regulations.'
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ARABIC MAIN CONTENT
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Arabic Main Content'
                )
                    ->description(
                        'Arabic fields automatically fall back to English if left empty.'
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
                                'Main Title - Arabic'
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

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ARABIC CARDS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Arabic Shisha Cards'
                )
                    ->columns(2)
                    ->collapsed()

                    ->schema([

                        TextInput::make(
                            'card_1_title_ar'
                        )
                            ->label(
                                'Card 1 Title - Arabic'
                            ),


                        Textarea::make(
                            'card_1_text_ar'
                        )
                            ->label(
                                'Card 1 Description - Arabic'
                            )
                            ->rows(
                                3
                            ),


                        TextInput::make(
                            'card_2_title_ar'
                        )
                            ->label(
                                'Card 2 Title - Arabic'
                            ),


                        Textarea::make(
                            'card_2_text_ar'
                        )
                            ->label(
                                'Card 2 Description - Arabic'
                            )
                            ->rows(
                                3
                            ),


                        TextInput::make(
                            'card_3_title_ar'
                        )
                            ->label(
                                'Card 3 Title - Arabic'
                            ),


                        Textarea::make(
                            'card_3_text_ar'
                        )
                            ->label(
                                'Card 3 Description - Arabic'
                            )
                            ->rows(
                                3
                            ),


                        TextInput::make(
                            'card_4_title_ar'
                        )
                            ->label(
                                'Card 4 Title - Arabic'
                            ),


                        Textarea::make(
                            'card_4_text_ar'
                        )
                            ->label(
                                'Card 4 Description - Arabic'
                            )
                            ->rows(
                                3
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ARABIC LEGAL
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Arabic Legal Text'
                )
                    ->collapsed()

                    ->schema([

                        Textarea::make(
                            'legal_text_ar'
                        )
                            ->label(
                                'Legal / Disclaimer - Arabic'
                            )
                            ->rows(
                                3
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | STATUS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Homepage Display'
                )
                    ->schema([

                        Toggle::make(
                            'is_active'
                        )
                            ->label(
                                'Show Shisha Showcase on Homepage'
                            )
                            ->default(
                                true
                            ),

                    ]),

            ]);
    }
}