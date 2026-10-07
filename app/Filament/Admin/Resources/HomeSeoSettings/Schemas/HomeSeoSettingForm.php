<?php

namespace App\Filament\Admin\Resources\HomeSeoSettings\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomeSeoSettingForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema

            ->components([

                /*
                |--------------------------------------------------------------------------
                | MAIN SEO
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Primary Homepage SEO'
                )
                    ->description(
                        'Main Google search title, description, canonical URL and indexing settings.'
                    )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'seo_title'
                        )
                            ->label(
                                'SEO Title'
                            )
                            ->required()
                            ->default(
                                'Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha'
                            )
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText(
                                'Recommended: approximately 50–60 characters when possible.'
                            ),


                        Textarea::make(
                            'meta_description'
                        )
                            ->label(
                                'Meta Description'
                            )
                            ->required()
                            ->default(
                                'Zaitoona Al Andalus is a premium restaurant, shisha and coffee lounge in Doha, Qatar, offering Mediterranean dining, refined shisha, Arabic coffee and relaxed hospitality.'
                            )
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull(),


                        Textarea::make(
                            'meta_keywords'
                        )
                            ->label(
                                'Meta Keywords'
                            )
                            ->default(
                                'Zaitoona Al Andalus, restaurant in Doha, Doha restaurant, shisha lounge Doha, Qatar shisha lounge, coffee lounge Doha, Mediterranean restaurant Doha, Arabic coffee Qatar'
                            )
                            ->rows(3)
                            ->columnSpanFull(),


                        TextInput::make(
                            'canonical_url'
                        )
                            ->label(
                                'Canonical URL'
                            )
                            ->url()
                            ->placeholder(
                                'https://zaitoonaalandalus.com/'
                            )
                            ->columnSpanFull(),


                        Select::make(
                            'robots'
                        )
                            ->label(
                                'Robots'
                            )
                            ->options([

                                'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'
                                    =>
                                    'Index & Follow',

                                'noindex, follow'
                                    =>
                                    'No Index, Follow',

                                'noindex, nofollow'
                                    =>
                                    'No Index, No Follow',

                            ])
                            ->default(
                                'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'
                            )
                            ->required(),


                        ColorPicker::make(
                            'theme_color'
                        )
                            ->label(
                                'Browser Theme Color'
                            )
                            ->default(
                                '#ffffff'
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ICONS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Favicon & App Icon'
                )
                    ->columns(2)
                    ->schema([

                        FileUpload::make(
                            'favicon'
                        )
                            ->label(
                                'Favicon'
                            )
                            ->image()
                            ->disk('public')
                            ->directory(
                                'seo/home'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(2048)
                            ->helperText(
                                'Recommended: square PNG, e.g. 512×512.'
                            ),


                        FileUpload::make(
                            'apple_touch_icon'
                        )
                            ->label(
                                'Apple Touch Icon'
                            )
                            ->image()
                            ->disk('public')
                            ->directory(
                                'seo/home'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(2048),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | OPEN GRAPH
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Facebook / WhatsApp / Open Graph'
                )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'og_title'
                        )
                            ->label(
                                'OG Title'
                            )
                            ->maxLength(255)
                            ->columnSpanFull(),


                        Textarea::make(
                            'og_description'
                        )
                            ->label(
                                'OG Description'
                            )
                            ->rows(3)
                            ->columnSpanFull(),


                        FileUpload::make(
                            'og_image'
                        )
                            ->label(
                                'Social Share Image'
                            )
                            ->image()
                            ->disk('public')
                            ->directory(
                                'seo/home'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(5120)
                            ->helperText(
                                'Recommended: 1200×630.'
                            ),


                        TextInput::make(
                            'og_image_alt'
                        )
                            ->label(
                                'Social Image Alt Text'
                            ),


                        Select::make(
                            'og_type'
                        )
                            ->label(
                                'OG Type'
                            )
                            ->options([
                                'website' =>
                                    'Website',
                                'restaurant' =>
                                    'Restaurant',
                            ])
                            ->default(
                                'website'
                            ),


                        TextInput::make(
                            'og_locale'
                        )
                            ->label(
                                'OG Locale'
                            )
                            ->default(
                                'en_US'
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | TWITTER
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Twitter / X'
                )
                    ->columns(2)
                    ->schema([

                        Select::make(
                            'twitter_card'
                        )
                            ->label(
                                'Card Type'
                            )
                            ->options([
                                'summary_large_image'
                                    =>
                                    'Large Image',

                                'summary'
                                    =>
                                    'Summary',
                            ])
                            ->default(
                                'summary_large_image'
                            ),


                        TextInput::make(
                            'twitter_title'
                        )
                            ->label(
                                'Twitter Title'
                            )
                            ->columnSpanFull(),


                        Textarea::make(
                            'twitter_description'
                        )
                            ->label(
                                'Twitter Description'
                            )
                            ->rows(3)
                            ->columnSpanFull(),


                        FileUpload::make(
                            'twitter_image'
                        )
                            ->label(
                                'Twitter Image'
                            )
                            ->image()
                            ->disk('public')
                            ->directory(
                                'seo/home'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(5120),


                        TextInput::make(
                            'twitter_image_alt'
                        )
                            ->label(
                                'Twitter Image Alt'
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | RESTAURANT SCHEMA
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Restaurant Structured Data'
                )
                    ->description(
                        'Information used to generate Restaurant JSON-LD for search engines.'
                    )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'schema_name'
                        )
                            ->label(
                                'Business Name'
                            )
                            ->default(
                                'Zaitoona Al Andalus'
                            )
                            ->required(),


                        TextInput::make(
                            'telephone'
                        )
                            ->label(
                                'Telephone'
                            )
                            ->default(
                                '+97433858316'
                            ),


                        Textarea::make(
                            'schema_description'
                        )
                            ->label(
                                'Business Description'
                            )
                            ->rows(3)
                            ->columnSpanFull(),


                        FileUpload::make(
                            'schema_image'
                        )
                            ->label(
                                'Schema Business Image'
                            )
                            ->image()
                            ->disk('public')
                            ->directory(
                                'seo/home'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(5120),


                        TextInput::make(
                            'price_range'
                        )
                            ->label(
                                'Price Range'
                            )
                            ->default(
                                'QAR $$-$$$'
                            ),


                        Textarea::make(
                            'serves_cuisine'
                        )
                            ->label(
                                'Cuisine Types'
                            )
                            ->default(
                                'Mediterranean, Middle Eastern, Arabic'
                            )
                            ->helperText(
                                'Separate cuisines with commas.'
                            )
                            ->columnSpanFull(),


                        TextInput::make(
                            'street_address'
                        )
                            ->label(
                                'Street Address'
                            )
                            ->default(
                                'Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840'
                            )
                            ->columnSpanFull(),


                        TextInput::make(
                            'address_locality'
                        )
                            ->label(
                                'City'
                            )
                            ->default(
                                'Doha'
                            ),


                        TextInput::make(
                            'address_region'
                        )
                            ->label(
                                'Region'
                            )
                            ->placeholder(
                                'Doha'
                            ),


                        TextInput::make(
                            'postal_code'
                        )
                            ->label(
                                'Postal Code'
                            ),


                        TextInput::make(
                            'address_country'
                        )
                            ->label(
                                'Country Code'
                            )
                            ->default(
                                'QA'
                            )
                            ->maxLength(10),


                        TextInput::make(
                            'latitude'
                        )
                            ->numeric()
                            ->label(
                                'Latitude'
                            ),


                        TextInput::make(
                            'longitude'
                        )
                            ->numeric()
                            ->label(
                                'Longitude'
                            ),


                        TimePicker::make(
                            'opening_time'
                        )
                            ->label(
                                'Opening Time'
                            )
                            ->seconds(false)
                            ->default(
                                '10:00'
                            ),


                        TimePicker::make(
                            'closing_time'
                        )
                            ->label(
                                'Closing Time'
                            )
                            ->seconds(false)
                            ->default(
                                '02:00'
                            ),


                        Toggle::make(
                            'accepts_reservations'
                        )
                            ->label(
                                'Accepts Reservations'
                            )
                            ->default(true),


                        TextInput::make(
                            'reservation_url'
                        )
                            ->label(
                                'Reservation URL'
                            )
                            ->url()
                            ->placeholder(
                                'https://zaitoonaalandalus.com/reserveatable'
                            )
                            ->columnSpanFull(),


                        TextInput::make(
                            'menu_url'
                        )
                            ->label(
                                'Menu URL'
                            )
                            ->url()
                            ->placeholder(
                                'https://zaitoonaalandalus.com/menu'
                            )
                            ->columnSpanFull(),


                        Textarea::make(
                            'same_as'
                        )
                            ->label(
                                'Social Profile URLs'
                            )
                            ->helperText(
                                'Enter one URL per line: Instagram, TikTok, Facebook, Google Business Profile, etc.'
                            )
                            ->rows(5)
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | VERIFICATION
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Search Engine Verification'
                )
                    ->columns(2)
                    ->collapsed()
                    ->schema([

                        TextInput::make(
                            'google_site_verification'
                        )
                            ->label(
                                'Google Verification Code'
                            )
                            ->helperText(
                                'Only enter the content value, not the full meta tag.'
                            ),


                        TextInput::make(
                            'bing_site_verification'
                        )
                            ->label(
                                'Bing Verification Code'
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | PUBLISHING
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Publishing'
                )
                    ->schema([

                        Toggle::make(
                            'is_active'
                        )
                            ->label(
                                'Use These SEO Settings'
                            )
                            ->default(true),

                    ]),

            ]);
    }
}