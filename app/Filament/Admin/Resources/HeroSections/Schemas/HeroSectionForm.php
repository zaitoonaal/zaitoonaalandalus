<?php

namespace App\Filament\Admin\Resources\HeroSections\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class HeroSectionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | GENERAL SETTINGS
                |--------------------------------------------------------------------------
                */

                Section::make('Hero General Settings')
                    ->description('Control the Hero section visibility, background video and buttons.')
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Show Hero Section')
                            ->default(true)
                            ->required(),

                        FileUpload::make('video_path')
                            ->label('Hero Background Video')
                            ->disk('public')
                            ->directory('hero/videos')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'video/mp4',
                            ])
                            ->maxSize(102400)
                            ->helperText('MP4 recommended. Maximum 100 MB.')
                            ->columnSpanFull(),

                        FileUpload::make('video_poster_path')
                            ->label('Video Poster / Fallback Image')
                            ->disk('public')
                            ->directory('hero/posters')
                            ->visibility('public')
                            ->image()
                            ->helperText('Shown before the background video loads.')
                            ->columnSpanFull(),

                        TextInput::make('reserve_url')
                            ->label('Reserve Button URL')
                            ->default('/reserveatable')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('menu_url')
                            ->label('Menu Button URL')
                            ->default('/menu')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('scroll_target')
                            ->label('Scroll Down Target')
                            ->default('#about')
                            ->required()
                            ->maxLength(100)
                            ->helperText('Example: #about'),

                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | LANGUAGE CONTENT
                |--------------------------------------------------------------------------
                */

                Tabs::make('Hero Content')
                    ->tabs([

                        /*
                        |--------------------------------------------------------------------------
                        | ENGLISH
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('English')
                            ->schema([

                                TextInput::make('kicker_en')
                                    ->label('Kicker')
                                    ->default('A refined Doha gathering place')
                                    ->required()
                                    ->maxLength(255)
                                    ->columnSpanFull(),

                                TextInput::make('title_line_1_en')
                                    ->label('H1 - Line 1')
                                    ->default('Taste.')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('title_line_2_en')
                                    ->label('H1 - Line 2')
                                    ->default('Breathe.')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('title_line_3_en')
                                    ->label('H1 - Line 3')
                                    ->default('Stay awhile.')
                                    ->required()
                                    ->maxLength(255),

                                Textarea::make('description_en')
                                    ->label('Hero Description')
                                    ->default(
                                        'Mediterranean flavours, beautifully prepared shisha and coffee rituals — served with warm Andalusian-inspired hospitality in the heart of Doha.'
                                    )
                                    ->rows(4)
                                    ->required()
                                    ->columnSpanFull(),

                                Section::make('Buttons')
                                    ->schema([

                                        TextInput::make('reserve_text_en')
                                            ->label('Reserve Button Text')
                                            ->default('Reserve your table')
                                            ->required(),

                                        TextInput::make('menu_text_en')
                                            ->label('Menu Button Text')
                                            ->default('Explore the menu')
                                            ->required(),

                                    ])
                                    ->columns(2)
                                    ->columnSpanFull(),

                                Section::make('Hero Information Items')
                                    ->description('The three information items below the Hero buttons.')
                                    ->schema([

                                        TextInput::make('meta_1_title_en')
                                            ->label('Item 1 Title')
                                            ->default('All Day')
                                            ->required(),

                                        TextInput::make('meta_1_text_en')
                                            ->label('Item 1 Text')
                                            ->default('Dining')
                                            ->required(),

                                        TextInput::make('meta_2_title_en')
                                            ->label('Item 2 Title')
                                            ->default('Premium')
                                            ->required(),

                                        TextInput::make('meta_2_text_en')
                                            ->label('Item 2 Text')
                                            ->default('Shisha')
                                            ->required(),

                                        TextInput::make('meta_3_title_en')
                                            ->label('Item 3 Title')
                                            ->default('Late Night')
                                            ->required(),

                                        TextInput::make('meta_3_text_en')
                                            ->label('Item 3 Text')
                                            ->default('Coffee & Lounge')
                                            ->required(),

                                    ])
                                    ->columns(2)
                                    ->columnSpanFull(),

                                TextInput::make('scroll_aria_en')
                                    ->label('Scroll Button Accessibility Text')
                                    ->default('Scroll down')
                                    ->required()
                                    ->maxLength(255)
                                    ->helperText('Used by screen readers.')
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),


                        /*
                        |--------------------------------------------------------------------------
                        | ARABIC
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('Arabic')
                            ->schema([

                                TextInput::make('kicker_ar')
                                    ->label('Kicker - Arabic')
                                    ->default('وجهة راقية للقاءات في الدوحة')
                                    ->required()
                                    ->maxLength(255)
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),

                                TextInput::make('title_line_1_ar')
                                    ->label('H1 - Line 1 - Arabic')
                                    ->default('تذوّق.')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make('title_line_2_ar')
                                    ->label('H1 - Line 2 - Arabic')
                                    ->default('استرخِ.')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make('title_line_3_ar')
                                    ->label('H1 - Line 3 - Arabic')
                                    ->default('وخُذ وقتك.')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                Textarea::make('description_ar')
                                    ->label('Hero Description - Arabic')
                                    ->default(
                                        'نكهات متوسطية، شيشة محضّرة بعناية وطقوس قهوة أصيلة — بروح ضيافة دافئة مستوحاة من الأندلس في قلب الدوحة.'
                                    )
                                    ->rows(4)
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),

                                Section::make('Buttons - Arabic')
                                    ->schema([

                                        TextInput::make('reserve_text_ar')
                                            ->label('Reserve Button Text - Arabic')
                                            ->default('احجز طاولتك')
                                            ->required()
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('menu_text_ar')
                                            ->label('Menu Button Text - Arabic')
                                            ->default('اكتشف القائمة')
                                            ->required()
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                    ])
                                    ->columns(2)
                                    ->columnSpanFull(),

                                Section::make('Hero Information Items - Arabic')
                                    ->schema([

                                        TextInput::make('meta_1_title_ar')
                                            ->label('Item 1 Title - Arabic')
                                            ->default('طوال اليوم')
                                            ->required()
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('meta_1_text_ar')
                                            ->label('Item 1 Text - Arabic')
                                            ->default('مطعم')
                                            ->required()
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('meta_2_title_ar')
                                            ->label('Item 2 Title - Arabic')
                                            ->default('مميزة')
                                            ->required()
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('meta_2_text_ar')
                                            ->label('Item 2 Text - Arabic')
                                            ->default('شيشة')
                                            ->required()
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('meta_3_title_ar')
                                            ->label('Item 3 Title - Arabic')
                                            ->default('حتى وقت متأخر')
                                            ->required()
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('meta_3_text_ar')
                                            ->label('Item 3 Text - Arabic')
                                            ->default('قهوة ولاونج')
                                            ->required()
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                    ])
                                    ->columns(2)
                                    ->columnSpanFull(),

                                TextInput::make('scroll_aria_ar')
                                    ->label('Scroll Button Accessibility Text - Arabic')
                                    ->default('انتقل للأسفل')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}