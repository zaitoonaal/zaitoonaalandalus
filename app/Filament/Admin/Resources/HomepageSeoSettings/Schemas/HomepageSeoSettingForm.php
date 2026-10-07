<?php

namespace App\Filament\Admin\Resources\HomepageSeoSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HomepageSeoSettingForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | PRIMARY SEO
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Primary Homepage SEO'
                )
                    ->description(
                        'Main Google and search-engine settings for the homepage.'
                    )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'site_name'
                        )
                            ->label(
                                'Site / Business Name'
                            )
                            ->default(
                                'Zaitoona Al Andalus'
                            )
                            ->required()
                            ->maxLength(255),


                        TextInput::make(
                            'author'
                        )
                            ->label(
                                'Author / Publisher'
                            )
                            ->default(
                                'Zaitoona Al Andalus'
                            )
                            ->maxLength(255),


                        TextInput::make(
                            'seo_title'
                        )
                            ->label(
                                'SEO Title'
                            )
                            ->default(
                                'Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha'
                            )
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),


                        Textarea::make(
                            'meta_description'
                        )
                            ->label(
                                'Meta Description'
                            )
                            ->rows(4)
                            ->maxLength(320)
                            ->columnSpanFull(),


                        TextInput::make(
                            'focus_keyword'
                        )
                            ->label(
                                'Focus Keyword'
                            )
                            ->helperText(
                                'Internal SEO planning field only. It is not output as a meta keywords tag.'
                            )
                            ->maxLength(255),


                        Select::make(
                            'robots'
                        )
                            ->label(
                                'Robots'
                            )
                            ->options([

                                'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' =>
                                    'Index, Follow - Recommended',

                                'noindex, follow' =>
                                    'Noindex, Follow',

                                'index, nofollow' =>
                                    'Index, Nofollow',

                                'noindex, nofollow' =>
                                    'Noindex, Nofollow',

                            ])
                            ->default(
                                'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'
                            )
                            ->required(),


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
                            ->helperText(
                                'Leave empty to automatically use the homepage URL.'
                            )
                            ->columnSpanFull(),


                        TextInput::make(
                            'theme_color'
                        )
                            ->label(
                                'Browser Theme Color'
                            )
                            ->default(
                                '#ffffff'
                            )
                            ->maxLength(20),


                        Toggle::make(
                            'is_active'
                        )
                            ->label(
                                'Enable Homepage SEO Settings'
                            )
                            ->default(true),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | SEARCH ENGINE VERIFICATION
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Search Engine Verification'
                )
                    ->collapsed()
                    ->schema([

                        TextInput::make(
                            'google_site_verification'
                        )
                            ->label(
                                'Google Site Verification Code'
                            )
                            ->helperText(
                                'Paste only the content value, not the full meta tag.'
                            ),


                        TextInput::make(
                            'bing_site_verification'
                        )
                            ->label(
                                'Bing Verification Code'
                            )
                            ->helperText(
                                'Paste only the verification content value.'
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | FAVICON
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Favicon & App Icon'
                )
                    ->columns(2)
                    ->collapsed()
                    ->schema([

                        FileUpload::make(
                            'favicon'
                        )
                            ->label(
                                'Favicon'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'seo/homepage'
                            )
                            ->visibility(
                                'public'
                            ),


                        FileUpload::make(
                            'apple_touch_icon'
                        )
                            ->label(
                                'Apple Touch Icon'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'seo/homepage'
                            )
                            ->visibility(
                                'public'
                            ),

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
                    ->collapsed()
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
                                'OG Image'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'seo/homepage/social'
                            )
                            ->visibility(
                                'public'
                            ),


                        TextInput::make(
                            'og_image_alt'
                        )
                            ->label(
                                'OG Image ALT'
                            )
                            ->maxLength(255),


                        TextInput::make(
                            'og_locale'
                        )
                            ->label(
                                'OG Locale'
                            )
                            ->default(
                                'en_US'
                            )
                            ->maxLength(20),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | TWITTER / X
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Twitter / X'
                )
                    ->columns(2)
                    ->collapsed()
                    ->schema([

                        Select::make(
                            'twitter_card'
                        )
                            ->label(
                                'Card Type'
                            )
                            ->options([

                                'summary_large_image' =>
                                    'Summary Large Image',

                                'summary' =>
                                    'Summary',

                            ])
                            ->default(
                                'summary_large_image'
                            ),


                        TextInput::make(
                            'twitter_title'
                        )
                            ->label(
                                'Twitter / X Title'
                            )
                            ->maxLength(255),


                        Textarea::make(
                            'twitter_description'
                        )
                            ->label(
                                'Twitter / X Description'
                            )
                            ->rows(3)
                            ->columnSpanFull(),


                        FileUpload::make(
                            'twitter_image'
                        )
                            ->label(
                                'Twitter / X Image'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'seo/homepage/twitter'
                            )
                            ->visibility(
                                'public'
                            ),


                        TextInput::make(
                            'twitter_image_alt'
                        )
                            ->label(
                                'Twitter Image ALT'
                            )
                            ->maxLength(255),

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
                        'Controls the homepage Restaurant JSON-LD structured data.'
                    )
                    ->columns(2)
                    ->schema([

                        Select::make(
                            'schema_type'
                        )
                            ->label(
                                'Schema Type'
                            )
                            ->options([

                                'Restaurant' =>
                                    'Restaurant',

                                'FoodEstablishment' =>
                                    'Food Establishment',

                                'LocalBusiness' =>
                                    'Local Business',

                            ])
                            ->default(
                                'Restaurant'
                            )
                            ->required(),


                        TextInput::make(
                            'schema_name'
                        )
                            ->label(
                                'Business Name'
                            )
                            ->default(
                                'Zaitoona Al Andalus'
                            ),


                        Textarea::make(
                            'schema_description'
                        )
                            ->label(
                                'Schema Description'
                            )
                            ->rows(3)
                            ->columnSpanFull(),


                        FileUpload::make(
                            'schema_image'
                        )
                            ->label(
                                'Restaurant Image'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'seo/homepage/schema'
                            )
                            ->visibility(
                                'public'
                            ),


                        FileUpload::make(
                            'schema_logo'
                        )
                            ->label(
                                'Restaurant Logo'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'seo/homepage/schema'
                            )
                            ->visibility(
                                'public'
                            ),


                        TextInput::make(
                            'schema_telephone'
                        )
                            ->label(
                                'Telephone'
                            )
                            ->default(
                                '+97433858316'
                            ),


                        TextInput::make(
                            'schema_email'
                        )
                            ->label(
                                'Email'
                            )
                            ->email()
                            ->default(
                                'hello@zaitoona.qa'
                            ),


                        TextInput::make(
                            'schema_price_range'
                        )
                            ->label(
                                'Price Range'
                            )
                            ->default(
                                'QAR $$-$$$'
                            ),


                        TagsInput::make(
                            'schema_serves_cuisine'
                        )
                            ->label(
                                'Serves Cuisine'
                            )
                            ->default([
                                'Mediterranean',
                                'Middle Eastern',
                                'Arabic',
                            ])
                            ->columnSpanFull(),


                        Toggle::make(
                            'schema_accepts_reservations'
                        )
                            ->label(
                                'Accepts Reservations'
                            )
                            ->default(true),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ADDRESS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Restaurant Address & Location'
                )
                    ->columns(2)
                    ->collapsed()
                    ->schema([

                        TextInput::make(
                            'schema_street_address'
                        )
                            ->label(
                                'Street Address'
                            )
                            ->default(
                                'Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840'
                            )
                            ->columnSpanFull(),


                        TextInput::make(
                            'schema_locality'
                        )
                            ->label(
                                'City'
                            )
                            ->default(
                                'Doha'
                            ),


                        TextInput::make(
                            'schema_region'
                        )
                            ->label(
                                'Region'
                            ),


                        TextInput::make(
                            'schema_postal_code'
                        )
                            ->label(
                                'Postal Code'
                            ),


                        TextInput::make(
                            'schema_country'
                        )
                            ->label(
                                'Country Code'
                            )
                            ->default(
                                'QA'
                            ),


                        TextInput::make(
                            'schema_area_served'
                        )
                            ->label(
                                'Area Served'
                            )
                            ->default(
                                'Doha'
                            ),


                        TextInput::make(
                            'schema_latitude'
                        )
                            ->label(
                                'Latitude'
                            )
                            ->numeric(),


                        TextInput::make(
                            'schema_longitude'
                        )
                            ->label(
                                'Longitude'
                            )
                            ->numeric(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | LINKS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Restaurant SEO Links'
                )
                    ->columns(2)
                    ->collapsed()
                    ->schema([

                        TextInput::make(
                            'schema_menu_url'
                        )
                            ->label(
                                'Menu URL'
                            )
                            ->url()
                            ->placeholder(
                                'https://zaitoonaalandalus.com/menu'
                            ),


                        TextInput::make(
                            'schema_reservation_url'
                        )
                            ->label(
                                'Reservation URL'
                            )
                            ->url()
                            ->placeholder(
                                'https://zaitoonaalandalus.com/reserveatable'
                            ),


                        TagsInput::make(
                            'schema_same_as'
                        )
                            ->label(
                                'Social / SameAs URLs'
                            )
                            ->placeholder(
                                'Add social profile URL'
                            )
                            ->helperText(
                                'Add official Instagram, Facebook, TikTok and other business profile URLs.'
                            )
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | OPENING HOURS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Opening Hours'
                )
                    ->collapsed()
                    ->schema([

                        Repeater::make(
                            'schema_opening_hours'
                        )
                            ->label(
                                'Opening Hours'
                            )
                            ->schema([

                                Select::make(
                                    'days'
                                )
                                    ->label(
                                        'Days'
                                    )
                                    ->multiple()
                                    ->options([

                                        'Monday' =>
                                            'Monday',

                                        'Tuesday' =>
                                            'Tuesday',

                                        'Wednesday' =>
                                            'Wednesday',

                                        'Thursday' =>
                                            'Thursday',

                                        'Friday' =>
                                            'Friday',

                                        'Saturday' =>
                                            'Saturday',

                                        'Sunday' =>
                                            'Sunday',

                                    ])
                                    ->required(),


                                TimePicker::make(
                                    'opens'
                                )
                                    ->label(
                                        'Opens'
                                    )
                                    ->seconds(false)
                                    ->required(),


                                TimePicker::make(
                                    'closes'
                                )
                                    ->label(
                                        'Closes'
                                    )
                                    ->seconds(false)
                                    ->required(),

                            ])
                            ->columns(3)
                            ->default([
                                [
                                    'days' => [
                                        'Monday',
                                        'Tuesday',
                                        'Wednesday',
                                        'Thursday',
                                        'Friday',
                                        'Saturday',
                                        'Sunday',
                                    ],

                                    'opens' =>
                                        '10:00',

                                    'closes' =>
                                        '02:00',
                                ],
                            ])
                            ->addActionLabel(
                                'Add Opening Hours'
                            )
                            ->reorderable()
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}