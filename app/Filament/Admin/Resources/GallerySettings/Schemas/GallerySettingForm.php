<?php

namespace App\Filament\Admin\Resources\GallerySettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class GallerySettingForm
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

                Section::make('Gallery Page Settings')
                    ->description('Control the Gallery page visibility and hero image.')
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Gallery Page Active')
                            ->default(true)
                            ->required(),

                        FileUpload::make('hero_image')
                            ->label('Gallery Hero Background Image')
                            ->image()
                            ->disk('public')
                            ->directory('gallery/hero')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->maxSize(10240)
                            ->helperText('Recommended: 1800px or wider.')
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | PAGE TEXT
                |--------------------------------------------------------------------------
                */

                Tabs::make('Gallery Page Content')
                    ->tabs([

                        Tab::make('English')
                            ->schema([

                                TextInput::make('hero_title_en')
                                    ->label('Hero H1 Title')
                                    ->default('Our Gallery')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('hero_alt_en')
                                    ->label('Hero Image Alt Text')
                                    ->default('Zaitoona Culinary Presentation')
                                    ->maxLength(255),

                                TextInput::make('intro_heading_en')
                                    ->label('Intro H2 Heading')
                                    ->default('Dine in Style')
                                    ->required()
                                    ->maxLength(255),

                                Textarea::make('intro_text_en')
                                    ->label('Intro Description')
                                    ->default(
                                        'Step inside our world of flavours. Browse through our curated gallery showcasing the ambiance, signature dishes, and unforgettable moments that make dining with us a memorable experience. From gourmet presentations to cozy interiors, each photo tells the story of our passion for food and hospitality.'
                                    )
                                    ->rows(5)
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make('view_label_en')
                                    ->label('Image Hover Text')
                                    ->default('View')
                                    ->required()
                                    ->maxLength(50),

                            ])
                            ->columns(2),


                        Tab::make('Arabic')
                            ->schema([

                                TextInput::make('hero_title_ar')
                                    ->label('Hero H1 Title - Arabic')
                                    ->default('معرض الصور')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make('hero_alt_ar')
                                    ->label('Hero Image Alt Text - Arabic')
                                    ->default('معرض زيتونة الأندلس')
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make('intro_heading_ar')
                                    ->label('Intro H2 Heading - Arabic')
                                    ->default('أناقة الطهي')
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                Textarea::make('intro_text_ar')
                                    ->label('Intro Description - Arabic')
                                    ->default(
                                        'ادخل إلى عالم النكهات الخاص بنا. تصفح معرضنا المنسق الذي يعرض الأجواء والأطباق المميزة واللحظات التي لا تُنسى والتي تجعل من تناول الطعام معنا تجربة استثنائية. من التقديمات الفاخرة إلى التصميم الداخلي المريح، تحكي كل صورة قصة شغفنا بالطعام والضيافة.'
                                    )
                                    ->rows(5)
                                    ->required()
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),

                                TextInput::make('view_label_ar')
                                    ->label('Image Hover Text - Arabic')
                                    ->default('عرض')
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
                | GALLERY BLOCKS
                |--------------------------------------------------------------------------
                */

                Section::make('Gallery Images & Layout')
                    ->description(
                        'Add, remove and reorder Gallery blocks. '
                        . 'Normal, Tall, Wide and Large use Main Image. '
                        . 'Stack uses Stack Image 1 and Stack Image 2.'
                    )
                    ->schema([

                        Repeater::make('gallery_blocks')
                            ->label('Gallery Blocks')
                            ->schema([

                                Select::make('type')
                                    ->label('Block Layout')
                                    ->options([
                                        'normal' => 'Normal',
                                        'tall' => 'Tall',
                                        'wide' => 'Wide',
                                        'large' => 'Large',
                                        'stack' => 'Stack - Two Images',
                                    ])
                                    ->default('normal')
                                    ->required(),

                                Select::make('delay')
                                    ->label('Reveal Delay')
                                    ->options([
                                        '0' => 'No Delay',
                                        '0.1' => '0.1 Second',
                                        '0.2' => '0.2 Second',
                                    ])
                                    ->default('0')
                                    ->required(),


                                /*
                                |--------------------------------------------------------------------------
                                | NORMAL / TALL / WIDE / LARGE
                                |--------------------------------------------------------------------------
                                */

                                FileUpload::make('image')
                                    ->label('Main Image')
                                    ->image()
                                    ->disk('public')
                                    ->directory('gallery/images')
                                    ->visibility('public')
                                    ->acceptedFileTypes([
                                        'image/jpeg',
                                        'image/png',
                                        'image/webp',
                                    ])
                                    ->maxSize(10240)
                                    ->helperText(
                                        'Use this for Normal, Tall, Wide or Large blocks.'
                                    )
                                    ->columnSpanFull(),

                                TextInput::make('alt_en')
                                    ->label('Main Image Alt - English')
                                    ->maxLength(255),

                                TextInput::make('alt_ar')
                                    ->label('Main Image Alt - Arabic')
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->maxLength(255),


                                /*
                                |--------------------------------------------------------------------------
                                | STACK BLOCK
                                |--------------------------------------------------------------------------
                                */

                                FileUpload::make('stack_image_1')
                                    ->label('Stack Image 1')
                                    ->image()
                                    ->disk('public')
                                    ->directory('gallery/images')
                                    ->visibility('public')
                                    ->acceptedFileTypes([
                                        'image/jpeg',
                                        'image/png',
                                        'image/webp',
                                    ])
                                    ->maxSize(10240)
                                    ->helperText(
                                        'Only used when Block Layout is Stack.'
                                    ),

                                FileUpload::make('stack_image_2')
                                    ->label('Stack Image 2')
                                    ->image()
                                    ->disk('public')
                                    ->directory('gallery/images')
                                    ->visibility('public')
                                    ->acceptedFileTypes([
                                        'image/jpeg',
                                        'image/png',
                                        'image/webp',
                                    ])
                                    ->maxSize(10240)
                                    ->helperText(
                                        'Only used when Block Layout is Stack.'
                                    ),

                                TextInput::make('stack_alt_1_en')
                                    ->label('Stack Image 1 Alt - English'),

                                TextInput::make('stack_alt_1_ar')
                                    ->label('Stack Image 1 Alt - Arabic')
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make('stack_alt_2_en')
                                    ->label('Stack Image 2 Alt - English'),

                                TextInput::make('stack_alt_2_ar')
                                    ->label('Stack Image 2 Alt - Arabic')
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),
                            ])
                            ->columns(2)
                            ->reorderable()
                            ->collapsible()
                            ->cloneable()
                            ->addActionLabel('Add Gallery Block')
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | PAGE SEO
                |--------------------------------------------------------------------------
                */

                Section::make('Gallery Page SEO')
                    ->description(
                        'These SEO settings belong to the Gallery URL as a whole.'
                    )
                    ->schema([

                        Tabs::make('SEO Languages')
                            ->tabs([

                                Tab::make('English SEO')
                                    ->schema([

                                        TextInput::make('seo_title_en')
                                            ->label('Meta Title')
                                            ->maxLength(255)
                                            ->default(
                                                'Gallery | Zaitoona Al Andalaus'
                                            ),

                                        Textarea::make('seo_description_en')
                                            ->label('Meta Description')
                                            ->rows(3)
                                            ->default(
                                                'View the gallery of Zaitoona Al Andalaus — a premium restaurant, shisha and coffee lounge in Doha, Qatar.'
                                            ),

                                        TextInput::make('og_title_en')
                                            ->label('Social Share Title')
                                            ->maxLength(255),

                                        Textarea::make('og_description_en')
                                            ->label('Social Share Description')
                                            ->rows(3),

                                        TextInput::make('og_image_alt_en')
                                            ->label('Social Image Alt Text')
                                            ->maxLength(255),

                                    ]),


                                Tab::make('Arabic SEO')
                                    ->schema([

                                        TextInput::make('seo_title_ar')
                                            ->label('Meta Title - Arabic')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        Textarea::make('seo_description_ar')
                                            ->label('Meta Description - Arabic')
                                            ->rows(3)
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('og_title_ar')
                                            ->label('Social Share Title - Arabic')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        Textarea::make('og_description_ar')
                                            ->label('Social Share Description - Arabic')
                                            ->rows(3)
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make('og_image_alt_ar')
                                            ->label('Social Image Alt Text - Arabic')
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),
                                    ]),
                            ])
                            ->columnSpanFull(),

                        FileUpload::make('og_image')
                            ->label('Social Sharing Image')
                            ->image()
                            ->disk('public')
                            ->directory('gallery/seo')
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->maxSize(10240)
                            ->columnSpanFull(),

                    ]),


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
                            ->maxLength(255)
                            ->helperText(
                                'Leave blank to use the current Gallery page URL.'
                            ),

                        Toggle::make('robots_index')
                            ->label('Allow Search Engines to Index')
                            ->default(true),

                        Toggle::make('robots_follow')
                            ->label('Allow Search Engines to Follow Links')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}