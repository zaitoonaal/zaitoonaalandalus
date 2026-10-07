<?php

namespace App\Filament\Admin\Resources\MenuSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class MenuSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | GENERAL
                |--------------------------------------------------------------------------
                */

                Section::make('Menu Page Settings')
                    ->description('Control the Menu page visibility, banner and reservation link.')
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Menu Page Active')
                            ->default(true),

                        FileUpload::make('banner_image')
                            ->label('Menu Banner Background')
                            ->image()
                            ->disk('public')
                            ->directory('menu/banner')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->maxSize(10240)
                            ->helperText('Recommended width: 1920px or larger.')
                            ->columnSpanFull(),

                        TextInput::make('reserve_url')
                            ->label('Reservation Button URL')
                            ->default('/reserveatable')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('currency_label')
                            ->label('Currency Label')
                            ->default('QR')
                            ->required()
                            ->maxLength(20),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | PAGE CONTENT
                |--------------------------------------------------------------------------
                */

                Tabs::make('Menu Page Content')
                    ->tabs([

                        Tab::make('English')
                            ->schema([

                                TextInput::make('eyebrow_en')
                                    ->label('Eyebrow')
                                    ->default('Signature selection')
                                    ->required(),

                                TextInput::make('title_en')
                                    ->label('Main Menu Heading')
                                    ->default('A menu for every part of the evening.')
                                    ->required(),

                                Textarea::make('intro_en')
                                    ->label('Introduction')
                                    ->default(
                                        'Explore the complete Zaitoona Al Andalaus menu featuring appetizers, signature grills, biryanis, artisan pizzas, refreshing mojitos, fresh juices, hot beverages, and premium shisha.'
                                    )
                                    ->rows(4)
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make('menu_note_en')
                                    ->label('Price Note')
                                    ->default('Prices in QAR')
                                    ->required(),

                                Textarea::make('menu_footer_en')
                                    ->label('Menu Footer Notice')
                                    ->default(
                                        'Please tell our team about any allergies or dietary requirements. Menu availability can vary.'
                                    )
                                    ->rows(3)
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make('reserve_text_en')
                                    ->label('Reservation Button Text')
                                    ->default('Reserve a table')
                                    ->required(),

                                TextInput::make('search_placeholder_en')
                                    ->label('Search Placeholder')
                                    ->default('Search dish or drink...')
                                    ->required(),

                                TextInput::make('empty_message_en')
                                    ->label('No Results Message')
                                    ->default('No matching items found.')
                                    ->required(),

                            ])
                            ->columns(2),


                        Tab::make('Arabic')
                            ->schema([

                                TextInput::make('eyebrow_ar')
                                    ->label('Eyebrow - Arabic')
                                    ->default('مختاراتنا')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make('title_ar')
                                    ->label('Main Menu Heading - Arabic')
                                    ->default('قائمة تناسب كل لحظة من الأمسية.')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                Textarea::make('intro_ar')
                                    ->label('Introduction - Arabic')
                                    ->default(
                                        'استكشف قائمة زيتونة الأندلس الكاملة التي تضم المقبلات، المشويات الخاصة، البرياني، البيتزا، الموهيتو المنعش، العصائر الطازجة، المشروبات الساخنة، والشيشة الفاخرة.'
                                    )
                                    ->rows(4)
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),

                                TextInput::make('menu_note_ar')
                                    ->label('Price Note - Arabic')
                                    ->default('الأسعار بالريال القطري')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                Textarea::make('menu_footer_ar')
                                    ->label('Menu Footer Notice - Arabic')
                                    ->default(
                                        'يرجى إبلاغ فريقنا بأي حساسية أو متطلبات غذائية. قد يختلف توفر بعض الأصناف.'
                                    )
                                    ->rows(3)
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),

                                TextInput::make('reserve_text_ar')
                                    ->label('Reservation Button Text - Arabic')
                                    ->default('احجز طاولة')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make('search_placeholder_ar')
                                    ->label('Search Placeholder - Arabic')
                                    ->default('ابحث عن صنف أو مشروب...')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make('empty_message_ar')
                                    ->label('No Results Message - Arabic')
                                    ->default('لا توجد أصناف مطابقة لبحثك.')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | MENU CATEGORIES + ITEMS
                |--------------------------------------------------------------------------
                */

                Section::make('Menu Categories & Items')
                    ->description(
                        'Create, delete and reorder categories and menu items. '
                        . 'Each category and item has English and Arabic fields.'
                    )
                    ->schema([

                        Repeater::make('menu_categories')
                            ->label('Menu Categories')
                            ->schema([

                                TextInput::make('category_en')
                                    ->label('Category Name - English')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('category_ar')
                                    ->label('Category Name - Arabic')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->maxLength(255),

                                Repeater::make('items')
                                    ->label('Menu Items')
                                    ->schema([

                                        TextInput::make('name_en')
                                            ->label('Item Name - English')
                                            ->required()
                                            ->maxLength(255),

                                        TextInput::make('name_ar')
                                            ->label('Item Name - Arabic')
                                            ->required()
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ])
                                            ->maxLength(255),

                                        TextInput::make('price')
                                            ->label('Price')
                                            ->required()
                                            ->placeholder('Example: 25 or 10 / 20')
                                            ->maxLength(50),

                                    ])
                                    ->columns(3)
                                    ->reorderable()
                                    ->collapsible()
                                    ->cloneable()
                                    ->addActionLabel('Add Menu Item')
                                    ->columnSpanFull(),

                            ])
                            ->columns(2)
                            ->reorderable()
                            ->collapsible()
                            ->cloneable()
                            ->addActionLabel('Add Menu Category')
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | SEO
                |--------------------------------------------------------------------------
                */

                Section::make('Menu Page SEO')
                    ->description('SEO settings for the /menu page.')
                    ->schema([

                        Tabs::make('SEO Languages')
                            ->tabs([

                                Tab::make('English SEO')
                                    ->schema([

                                        TextInput::make('seo_title_en')
                                            ->label('SEO Meta Title')
                                            ->default(
                                                'Menu | Zaitoona Al Andalaus'
                                            )
                                            ->maxLength(255),

                                        Textarea::make('seo_description_en')
                                            ->label('SEO Meta Description')
                                            ->default(
                                                'Explore the menu at Zaitoona Al Andalaus in Doha, Qatar, including appetizers, grills, biryani, pizza, juices, coffee and premium shisha.'
                                            )
                                            ->rows(3),

                                        TextInput::make('focus_keyword_en')
                                            ->label('Focus Keyword')
                                            ->helperText(
                                                'Internal SEO planning field. It is not output as a meta tag.'
                                            ),

                                        TextInput::make('og_title_en')
                                            ->label('Open Graph Title'),

                                        Textarea::make('og_description_en')
                                            ->label('Open Graph Description')
                                            ->rows(3),

                                        TextInput::make('og_image_alt_en')
                                            ->label('Social Image Alt Text'),

                                        TextInput::make('twitter_title_en')
                                            ->label('Twitter / X Title'),

                                        Textarea::make('twitter_description_en')
                                            ->label('Twitter / X Description')
                                            ->rows(3),

                                        TextInput::make('twitter_image_alt_en')
                                            ->label('Twitter / X Image Alt'),
                                    ]),


                                Tab::make('Arabic SEO')
                                    ->schema([

                                        TextInput::make('seo_title_ar')
                                            ->label('SEO Meta Title - Arabic')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        Textarea::make('seo_description_ar')
                                            ->label('SEO Meta Description - Arabic')
                                            ->rows(3)
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('focus_keyword_ar')
                                            ->label('Focus Keyword - Arabic')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('og_title_ar')
                                            ->label('Open Graph Title - Arabic')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        Textarea::make('og_description_ar')
                                            ->label('Open Graph Description - Arabic')
                                            ->rows(3)
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('og_image_alt_ar')
                                            ->label('Social Image Alt - Arabic')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('twitter_title_ar')
                                            ->label('Twitter / X Title - Arabic')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        Textarea::make('twitter_description_ar')
                                            ->label('Twitter / X Description - Arabic')
                                            ->rows(3)
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('twitter_image_alt_ar')
                                            ->label('Twitter / X Image Alt - Arabic')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),
                                    ]),
                            ])
                            ->columnSpanFull(),

                        FileUpload::make('og_image')
                            ->label('Open Graph / Facebook Image')
                            ->image()
                            ->disk('public')
                            ->directory('menu/seo')
                            ->visibility('public')
                            ->maxSize(10240),

                        FileUpload::make('twitter_image')
                            ->label('Twitter / X Image')
                            ->image()
                            ->disk('public')
                            ->directory('menu/seo')
                            ->visibility('public')
                            ->maxSize(10240),
                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | TECHNICAL SEO
                |--------------------------------------------------------------------------
                */

                Section::make('Technical SEO')
                    ->schema([

                        TextInput::make('canonical_url')
                            ->label('Canonical URL')
                            ->url()
                            ->helperText(
                                'Leave empty to automatically use the current /menu URL.'
                            )
                            ->columnSpanFull(),

                        Toggle::make('robots_index')
                            ->label('Allow Search Engine Indexing')
                            ->default(true),

                        Toggle::make('robots_follow')
                            ->label('Allow Search Engines to Follow Links')
                            ->default(true),

                        Toggle::make('schema_enabled')
                            ->label('Enable Menu Page Structured Data')
                            ->default(true),

                    ])
                    ->columns(2),
            ]);
    }
}