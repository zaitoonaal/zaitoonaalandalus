<?php

namespace App\Filament\Admin\Resources\TestimonialSections\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class TestimonialSectionForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | SECTION SETTINGS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Testimonials Section'
                )
                    ->description(
                        'Manage the homepage testimonials section without changing the frontend design.'
                    )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'eyebrow_en'
                        )
                            ->label(
                                'Section Heading - English'
                            )
                            ->default(
                                'What the evening should feel like'
                            )
                            ->required()
                            ->maxLength(255),


                        TextInput::make(
                            'eyebrow_ar'
                        )
                            ->label(
                                'Section Heading - Arabic'
                            )
                            ->default(
                                'هكذا يجب أن تشعر الأمسية'
                            )
                            ->maxLength(255),


                        Toggle::make(
                            'is_active'
                        )
                            ->label(
                                'Show Testimonials Section'
                            )
                            ->default(true),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | TESTIMONIAL ITEMS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Testimonials'
                )
                    ->description(
                        'Create, edit, delete and reorder testimonials here.'
                    )
                    ->schema([

                        Repeater::make(
                            'testimonials'
                        )
                            ->label(
                                'Homepage Testimonials'
                            )
                            ->schema([

                                /*
                                |--------------------------------------------------------------------------
                                | English
                                |--------------------------------------------------------------------------
                                */

                                Textarea::make(
                                    'quote_en'
                                )
                                    ->label(
                                        'Review / Quote - English'
                                    )
                                    ->rows(4)
                                    ->required()
                                    ->columnSpanFull(),


                                TextInput::make(
                                    'author_en'
                                )
                                    ->label(
                                        'Author - English'
                                    )
                                    ->required()
                                    ->default(
                                        'Zaitoona Guest Experience'
                                    )
                                    ->maxLength(255),


                                /*
                                |--------------------------------------------------------------------------
                                | Arabic
                                |--------------------------------------------------------------------------
                                */

                                Textarea::make(
                                    'quote_ar'
                                )
                                    ->label(
                                        'Review / Quote - Arabic'
                                    )
                                    ->rows(4)
                                    ->columnSpanFull(),


                                TextInput::make(
                                    'author_ar'
                                )
                                    ->label(
                                        'Author - Arabic'
                                    )
                                    ->default(
                                        'تجربة ضيف زيتونة'
                                    )
                                    ->maxLength(255),


                                /*
                                |--------------------------------------------------------------------------
                                | Rating
                                |--------------------------------------------------------------------------
                                */

                                Select::make(
                                    'rating'
                                )
                                    ->label(
                                        'Star Rating'
                                    )
                                    ->options([
                                        5 => '5 Stars',
                                        4 => '4 Stars',
                                        3 => '3 Stars',
                                        2 => '2 Stars',
                                        1 => '1 Star',
                                    ])
                                    ->default(5)
                                    ->required(),


                                /*
                                |--------------------------------------------------------------------------
                                | Individual Status
                                |--------------------------------------------------------------------------
                                */

                                Toggle::make(
                                    'is_active'
                                )
                                    ->label(
                                        'Show This Testimonial'
                                    )
                                    ->default(true),

                            ])
                            ->columns(2)
                            ->defaultItems(0)
                            ->addActionLabel(
                                'Add Testimonial'
                            )
                            ->reorderable()
                            ->collapsible()
                            ->cloneable()
                            ->itemLabel(
                                fn (array $state): ?string =>
                                    $state['author_en']
                                    ?? 'Testimonial'
                            )
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}