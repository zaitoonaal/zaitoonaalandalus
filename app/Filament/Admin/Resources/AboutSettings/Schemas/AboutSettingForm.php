<?php

namespace App\Filament\Admin\Resources\AboutSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class AboutSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | FEATURE IMAGES
                |--------------------------------------------------------------------------
                */

                Section::make('Feature Images')
                    ->description('Upload the three images displayed in the feature cards section.')
                    ->schema([
                        FileUpload::make('feat1_image')
                            ->label('Feature 1 Image (Culinary Craft)')
                            ->image()
                            ->disk('public')
                            ->directory('about/features')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(10240)
                            ->helperText('Recommended: 1200px or wider.'),

                        FileUpload::make('feat2_image')
                            ->label('Feature 2 Image (Relax with us)')
                            ->image()
                            ->disk('public')
                            ->directory('about/features')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(10240)
                            ->helperText('Recommended: 1200px or wider.'),

                        FileUpload::make('feat3_image')
                            ->label('Feature 3 Image (Coffee rituals)')
                            ->image()
                            ->disk('public')
                            ->directory('about/features')
                            ->visibility('public')
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->maxSize(10240)
                            ->helperText('Recommended: 1200px or wider.'),
                    ])
                    ->columns(3),


                /*
                |--------------------------------------------------------------------------
                | TEXT CONTENT & TRANSLATIONS
                |--------------------------------------------------------------------------
                */

                Tabs::make('About Section Content')
                    ->tabs([

                        /* --- ENGLISH TAB --- */
                        Tab::make('English')
                            ->schema([

                                Section::make('Main Intro Text')
                                    ->schema([
                                        TextInput::make('intro_eyebrow.en')
                                            ->label('Intro Eyebrow')
                                            ->default('The Zaitoona experience')
                                            ->required()
                                            ->maxLength(255),

                                        TextInput::make('intro_title.en')
                                            ->label('Intro H2 Title')
                                            ->default('Rooted in hospitality. Made for Doha.')
                                            ->required()
                                            ->maxLength(255),

                                        Textarea::make('intro_copy.en')
                                            ->label('Intro Copy / Paragraph')
                                            ->default('Zaitoona Al Andalaus brings together the generosity of Arab hospitality and the relaxed elegance of Mediterranean café culture — a place to meet, dine, share shisha and let the evening unfold naturally.')
                                            ->rows(4)
                                            ->required()
                                            ->columnSpanFull(),
                                    ])->columns(2),

                                Section::make('Intro Details')
                                    ->schema([
                                        TextInput::make('detail1_title.en')
                                            ->label('Detail 1 Title')
                                            ->default('From the kitchen'),
                                        Textarea::make('detail1_text.en')
                                            ->label('Detail 1 Text')
                                            ->default('Shareable mezze, grilled signatures, fresh salads, desserts and all-day plates made for long tables and easy conversation.')
                                            ->rows(3),

                                        TextInput::make('detail2_title.en')
                                            ->label('Detail 2 Title')
                                            ->default('From the lounge'),
                                        Textarea::make('detail2_text.en')
                                            ->label('Detail 2 Text')
                                            ->default('Thoughtfully prepared shisha, specialty coffee, tea and refreshing drinks served in an unhurried, polished setting.')
                                            ->rows(3),
                                    ])->columns(2),

                                Section::make('Feature Cards Text')
                                    ->schema([
                                        // Feature 1
                                        TextInput::make('feat1_label.en')->label('Feature 1 Label')->default('Cuisine'),
                                        TextInput::make('feat1_title.en')->label('Feature 1 Title')->default('Culinary craft'),
                                        Textarea::make('feat1_text.en')->label('Feature 1 Text')->default('Modern Mediterranean and Middle Eastern flavours, plated with restraint and character.')->columnSpanFull(),

                                        // Feature 2
                                        TextInput::make('feat2_label.en')->label('Feature 2 Label')->default('Lounge'),
                                        TextInput::make('feat2_title.en')->label('Feature 2 Title')->default('Relax with us'),
                                        Textarea::make('feat2_text.en')->label('Feature 2 Text')->default('Soft seating, warm service and a calm atmosphere that carries comfortably into the night.')->columnSpanFull(),

                                        // Feature 3
                                        TextInput::make('feat3_label.en')->label('Feature 3 Label')->default('Coffee'),
                                        TextInput::make('feat3_title.en')->label('Feature 3 Title')->default('Coffee rituals'),
                                        Textarea::make('feat3_text.en')->label('Feature 3 Text')->default('Arabic coffee, espresso classics and slow-brew favourites — from first cup to late-night finish.')->columnSpanFull(),
                                    ])->columns(2),

                            ]),


                        /* --- ARABIC TAB --- */
                        Tab::make('Arabic')
                            ->schema([

                                Section::make('Main Intro Text - Arabic')
                                    ->schema([
                                        TextInput::make('intro_eyebrow.ar')
                                            ->label('Intro Eyebrow (AR)')
                                            ->default('تجربة زيتونة')
                                            ->required()
                                            ->extraInputAttributes(['dir' => 'rtl'])
                                            ->maxLength(255),

                                        TextInput::make('intro_title.ar')
                                            ->label('Intro H2 Title (AR)')
                                            ->default('ضيافة أصيلة بروح الدوحة.')
                                            ->required()
                                            ->extraInputAttributes(['dir' => 'rtl'])
                                            ->maxLength(255),

                                        Textarea::make('intro_copy.ar')
                                            ->label('Intro Copy / Paragraph (AR)')
                                            ->default('تجمع زيتونة الأندلس بين كرم الضيافة العربية وأناقة المقاهي المتوسطية الهادئة — مكان للقاء وتناول الطعام ومشاركة الشيشة وترك الأمسية تسير على مهل.')
                                            ->rows(4)
                                            ->required()
                                            ->extraInputAttributes(['dir' => 'rtl'])
                                            ->columnSpanFull(),
                                    ])->columns(2),

                                Section::make('Intro Details - Arabic')
                                    ->schema([
                                        TextInput::make('detail1_title.ar')
                                            ->label('Detail 1 Title (AR)')
                                            ->default('من المطبخ')
                                            ->extraInputAttributes(['dir' => 'rtl']),
                                        Textarea::make('detail1_text.ar')
                                            ->label('Detail 1 Text (AR)')
                                            ->default('مقبلات للمشاركة، مشاوي مميزة، سلطات طازجة، حلويات وأطباق طوال اليوم لطاولات طويلة وأحاديث أجمل.')
                                            ->extraInputAttributes(['dir' => 'rtl'])
                                            ->rows(3),

                                        TextInput::make('detail2_title.ar')
                                            ->label('Detail 2 Title (AR)')
                                            ->default('من اللاونج')
                                            ->extraInputAttributes(['dir' => 'rtl']),
                                        Textarea::make('detail2_text.ar')
                                            ->label('Detail 2 Text (AR)')
                                            ->default('شيشة محضّرة بعناية، قهوة مختصة، شاي ومشروبات منعشة تقدم في أجواء راقية ومريحة.')
                                            ->extraInputAttributes(['dir' => 'rtl'])
                                            ->rows(3),
                                    ])->columns(2),

                                Section::make('Feature Cards Text - Arabic')
                                    ->schema([
                                        // Feature 1
                                        TextInput::make('feat1_label.ar')->label('Feature 1 Label (AR)')->default('المطبخ')->extraInputAttributes(['dir' => 'rtl']),
                                        TextInput::make('feat1_title.ar')->label('Feature 1 Title (AR)')->default('إبداع الطهي')->extraInputAttributes(['dir' => 'rtl']),
                                        Textarea::make('feat1_text.ar')->label('Feature 1 Text (AR)')->default('نكهات متوسطية وشرق أوسطية عصرية بتقديم أنيق ومتوازن.')->extraInputAttributes(['dir' => 'rtl'])->columnSpanFull(),

                                        // Feature 2
                                        TextInput::make('feat2_label.ar')->label('Feature 2 Label (AR)')->default('اللاونج')->extraInputAttributes(['dir' => 'rtl']),
                                        TextInput::make('feat2_title.ar')->label('Feature 2 Title (AR)')->default('استرخِ معنا')->extraInputAttributes(['dir' => 'rtl']),
                                        Textarea::make('feat2_text.ar')->label('Feature 2 Text (AR)')->default('جلسات مريحة، خدمة دافئة وأجواء هادئة تمتد بسلاسة إلى الليل.')->extraInputAttributes(['dir' => 'rtl'])->columnSpanFull(),

                                        // Feature 3
                                        TextInput::make('feat3_label.ar')->label('Feature 3 Label (AR)')->default('القهوة')->extraInputAttributes(['dir' => 'rtl']),
                                        TextInput::make('feat3_title.ar')->label('Feature 3 Title (AR)')->default('طقوس القهوة')->extraInputAttributes(['dir' => 'rtl']),
                                        Textarea::make('feat3_text.ar')->label('Feature 3 Text (AR)')->default('قهوة عربية، كلاسيكيات الإسبريسو وطرق تقطير هادئة من أول فنجان حتى نهاية السهرة.')->extraInputAttributes(['dir' => 'rtl'])->columnSpanFull(),
                                    ])->columns(2),
                            ]),

                    ])
                    ->columnSpanFull(),

            ]);
    }
}