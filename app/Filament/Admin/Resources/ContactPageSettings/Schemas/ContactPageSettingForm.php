<?php

namespace App\Filament\Admin\Resources\ContactPageSettings\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class ContactPageSettingForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | GENERAL
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Contact Page General Settings'
                )
                    ->schema([

                        Toggle::make('is_active')
                            ->label('Contact Page Active')
                            ->default(true),

                        FileUpload::make('hero_image')
                            ->label('Contact Hero Image')
                            ->image()
                            ->disk('public')
                            ->directory(
                                'contact/hero'
                            )
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->maxSize(10240)
                            ->helperText(
                                'Recommended: 1800px or wider.'
                            )
                            ->columnSpanFull(),
                    ]),


                /*
                |--------------------------------------------------------------------------
                | CONTENT
                |--------------------------------------------------------------------------
                */

                Tabs::make(
                    'Contact Page Content'
                )
                    ->tabs([

                        /*
                        |--------------------------------------------------------------------------
                        | ENGLISH
                        |--------------------------------------------------------------------------
                        */

                        Tab::make('English')
                            ->schema([

                                TextInput::make(
                                    'hero_title_en'
                                )
                                    ->label(
                                        'Hero H1 Title'
                                    )
                                    ->default(
                                        'Contact Us'
                                    )
                                    ->required(),

                                TextInput::make(
                                    'hero_alt_en'
                                )
                                    ->label(
                                        'Hero Image Alt Text'
                                    )
                                    ->default(
                                        'Delicious Mezze Platter'
                                    ),

                                TextInput::make(
                                    'contact_heading_en'
                                )
                                    ->label(
                                        'Contact H2 Heading'
                                    )
                                    ->default(
                                        'Have a question, a comment, or just craving that mezze?'
                                    )
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make(
                                    'contact_sub_en'
                                )
                                    ->label(
                                        'Contact Subheading'
                                    )
                                    ->default(
                                        "We'd love to hear from you."
                                    )
                                    ->required()
                                    ->columnSpanFull(),

                                Textarea::make(
                                    'contact_description_en'
                                )
                                    ->label(
                                        'Contact Description'
                                    )
                                    ->default(
                                        "Whether you're planning a visit, hosting an event, or just want to say hello, our team is here to help. Drop us a message, give us a call, or swing by and speak to us in person."
                                    )
                                    ->rows(5)
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make(
                                    'email_button_text_en'
                                )
                                    ->label(
                                        'Email Button Text'
                                    )
                                    ->default('Email Us'),

                                TextInput::make(
                                    'whatsapp_button_text_en'
                                )
                                    ->label(
                                        'WhatsApp Button Text'
                                    )
                                    ->default(
                                        'WhatsApp Us'
                                    ),

                                TextInput::make(
                                    'location_label_en'
                                )
                                    ->label(
                                        'Location Label'
                                    )
                                    ->default(
                                        'Location'
                                    ),

                                TextInput::make(
                                    'phone_label_en'
                                )
                                    ->label(
                                        'Phone Label'
                                    )
                                    ->default(
                                        'Phone / WhatsApp'
                                    ),

                                Textarea::make(
                                    'address_en'
                                )
                                    ->label(
                                        'Address - English'
                                    )
                                    ->default(
                                        'Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840, Doha Qatar'
                                    )
                                    ->rows(3)
                                    ->columnSpanFull(),

                                TextInput::make(
                                    'map_title_en'
                                )
                                    ->label(
                                        'Map Accessibility Title'
                                    )
                                    ->default(
                                        'Zaitoona Al Andalaus location map'
                                    )
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

                                TextInput::make(
                                    'hero_title_ar'
                                )
                                    ->label(
                                        'Hero H1 Title - Arabic'
                                    )
                                    ->default(
                                        'تواصل معنا'
                                    )
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make(
                                    'hero_alt_ar'
                                )
                                    ->label(
                                        'Hero Image Alt - Arabic'
                                    )
                                    ->default(
                                        'أطباق زيتونة الأندلس'
                                    )
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make(
                                    'contact_heading_ar'
                                )
                                    ->label(
                                        'Contact H2 - Arabic'
                                    )
                                    ->default(
                                        'لديك سؤال، تعليق، أو فقط تشتهي أطباقنا؟'
                                    )
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),

                                TextInput::make(
                                    'contact_sub_ar'
                                )
                                    ->label(
                                        'Subheading - Arabic'
                                    )
                                    ->default(
                                        'نود أن نسمع منك.'
                                    )
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),

                                Textarea::make(
                                    'contact_description_ar'
                                )
                                    ->label(
                                        'Description - Arabic'
                                    )
                                    ->default(
                                        'سواء كنت تخطط لزيارة، أو استضافة فعالية، أو ترغب فقط في إلقاء التحية، فريقنا هنا للمساعدة. أرسل لنا رسالة، أو اتصل بنا، أو تفضل بزيارتنا وتحدث معنا شخصياً.'
                                    )
                                    ->rows(5)
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),

                                TextInput::make(
                                    'email_button_text_ar'
                                )
                                    ->label(
                                        'Email Button - Arabic'
                                    )
                                    ->default('راسلنا')
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make(
                                    'whatsapp_button_text_ar'
                                )
                                    ->label(
                                        'WhatsApp Button - Arabic'
                                    )
                                    ->default('واتساب')
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make(
                                    'location_label_ar'
                                )
                                    ->label(
                                        'Location Label - Arabic'
                                    )
                                    ->default('الموقع')
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                TextInput::make(
                                    'phone_label_ar'
                                )
                                    ->label(
                                        'Phone Label - Arabic'
                                    )
                                    ->default(
                                        'الهاتف / واتساب'
                                    )
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ]),

                                Textarea::make(
                                    'address_ar'
                                )
                                    ->label(
                                        'Address - Arabic'
                                    )
                                    ->default(
                                        'المطار القديم، بالقرب من فود بليس، مبنى رقم 26، منطقة 45، شارع 840، الدوحة، قطر'
                                    )
                                    ->rows(3)
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),

                                TextInput::make(
                                    'map_title_ar'
                                )
                                    ->label(
                                        'Map Accessibility Title - Arabic'
                                    )
                                    ->default(
                                        'موقع زيتونة الأندلس على الخريطة'
                                    )
                                    ->extraInputAttributes([
                                        'dir' => 'rtl',
                                    ])
                                    ->columnSpanFull(),
                            ])
                            ->columns(2),
                    ])
                    ->columnSpanFull(),


                /*
                |--------------------------------------------------------------------------
                | CONTACT DETAILS
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Contact Information'
                )
                    ->description(
                        'These values control the email, telephone, WhatsApp, address and map.'
                    )
                    ->schema([

                        TextInput::make('email')
                            ->label('Business Email')
                            ->email()
                            ->default(
                                'hello@zaitoona.qa'
                            ),

                        TextInput::make(
                            'phone_display'
                        )
                            ->label(
                                'Phone Display'
                            )
                            ->default(
                                '+974 3385 8316'
                            ),

                        TextInput::make(
                            'phone_dial'
                        )
                            ->label(
                                'Phone Dial Number'
                            )
                            ->default(
                                '+97433858316'
                            )
                            ->helperText(
                                'Use international format.'
                            ),

                        TextInput::make(
                            'whatsapp'
                        )
                            ->label(
                                'WhatsApp Number'
                            )
                            ->default(
                                '97433858316'
                            )
                            ->helperText(
                                'Numbers only including country code.'
                            ),

                        Textarea::make(
                            'map_embed_url'
                        )
                            ->label(
                                'Google Maps Embed URL'
                            )
                            ->default(
                                'https://www.google.com/maps?q=Old%20Airport,%20Near%20Food%20Place,%20Building%20No.%2026,%20Zone%2045,%20Street%20No%20840,%20Doha%20Qatar&output=embed'
                            )
                            ->rows(4)
                            ->helperText(
                                'Paste only the iframe SRC URL, not the complete iframe code.'
                            )
                            ->columnSpanFull(),
                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | SEO
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Contact Page SEO'
                )
                    ->description(
                        'SEO settings for the /contact URL.'
                    )
                    ->schema([

                        Tabs::make(
                            'SEO Languages'
                        )
                            ->tabs([

                                /*
                                |--------------------------------------------------------------------------
                                | ENGLISH SEO
                                |--------------------------------------------------------------------------
                                */

                                Tab::make(
                                    'English SEO'
                                )
                                    ->schema([

                                        TextInput::make(
                                            'seo_title_en'
                                        )
                                            ->label(
                                                'SEO Meta Title'
                                            )
                                            ->default(
                                                'Contact Us | Zaitoona Al Andalaus'
                                            )
                                            ->maxLength(255),

                                        Textarea::make(
                                            'seo_description_en'
                                        )
                                            ->label(
                                                'SEO Meta Description'
                                            )
                                            ->default(
                                                'Contact Zaitoona Al Andalaus — a premium restaurant, shisha and coffee lounge in Doha, Qatar.'
                                            )
                                            ->rows(3),

                                        TextInput::make(
                                            'focus_keyword_en'
                                        )
                                            ->label(
                                                'Focus Keyword'
                                            )
                                            ->helperText(
                                                'Editorial field only. It is not output as a meta keyword tag.'
                                            ),

                                        TextInput::make(
                                            'og_title_en'
                                        )
                                            ->label(
                                                'Open Graph Title'
                                            ),

                                        Textarea::make(
                                            'og_description_en'
                                        )
                                            ->label(
                                                'Open Graph Description'
                                            )
                                            ->rows(3),

                                        TextInput::make(
                                            'og_image_alt_en'
                                        )
                                            ->label(
                                                'Social Image Alt Text'
                                            ),

                                        TextInput::make(
                                            'twitter_title_en'
                                        )
                                            ->label(
                                                'Twitter / X Title'
                                            ),

                                        Textarea::make(
                                            'twitter_description_en'
                                        )
                                            ->label(
                                                'Twitter / X Description'
                                            )
                                            ->rows(3),

                                        TextInput::make(
                                            'twitter_image_alt_en'
                                        )
                                            ->label(
                                                'Twitter Image Alt Text'
                                            ),
                                    ]),


                                /*
                                |--------------------------------------------------------------------------
                                | ARABIC SEO
                                |--------------------------------------------------------------------------
                                */

                                Tab::make(
                                    'Arabic SEO'
                                )
                                    ->schema([

                                        TextInput::make(
                                            'seo_title_ar'
                                        )
                                            ->label(
                                                'SEO Meta Title - Arabic'
                                            )
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        Textarea::make(
                                            'seo_description_ar'
                                        )
                                            ->label(
                                                'SEO Meta Description - Arabic'
                                            )
                                            ->rows(3)
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make(
                                            'focus_keyword_ar'
                                        )
                                            ->label(
                                                'Focus Keyword - Arabic'
                                            )
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make(
                                            'og_title_ar'
                                        )
                                            ->label(
                                                'Open Graph Title - Arabic'
                                            )
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        Textarea::make(
                                            'og_description_ar'
                                        )
                                            ->label(
                                                'Open Graph Description - Arabic'
                                            )
                                            ->rows(3)
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make(
                                            'og_image_alt_ar'
                                        )
                                            ->label(
                                                'Social Image Alt - Arabic'
                                            )
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make(
                                            'twitter_title_ar'
                                        )
                                            ->label(
                                                'Twitter / X Title - Arabic'
                                            )
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        Textarea::make(
                                            'twitter_description_ar'
                                        )
                                            ->label(
                                                'Twitter / X Description - Arabic'
                                            )
                                            ->rows(3)
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),

                                        TextInput::make(
                                            'twitter_image_alt_ar'
                                        )
                                            ->label(
                                                'Twitter Image Alt - Arabic'
                                            )
                                            ->extraInputAttributes([
                                                'dir' => 'rtl',
                                            ]),
                                    ]),
                            ])
                            ->columnSpanFull(),


                        FileUpload::make(
                            'og_image'
                        )
                            ->label(
                                'Open Graph / Social Sharing Image'
                            )
                            ->image()
                            ->disk('public')
                            ->directory(
                                'contact/seo'
                            )
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->maxSize(10240)
                            ->columnSpanFull(),


                        FileUpload::make(
                            'twitter_image'
                        )
                            ->label(
                                'Twitter / X Sharing Image'
                            )
                            ->image()
                            ->disk('public')
                            ->directory(
                                'contact/seo'
                            )
                            ->visibility('public')
                            ->acceptedFileTypes([
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->maxSize(10240)
                            ->helperText(
                                'Leave blank to use the Open Graph image.'
                            )
                            ->columnSpanFull(),
                    ]),


                /*
                |--------------------------------------------------------------------------
                | TECHNICAL SEO
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Technical SEO'
                )
                    ->schema([

                        TextInput::make(
                            'canonical_url'
                        )
                            ->label(
                                'Canonical URL'
                            )
                            ->url()
                            ->helperText(
                                'Leave blank to use the current /contact URL.'
                            )
                            ->columnSpanFull(),

                        Toggle::make(
                            'robots_index'
                        )
                            ->label(
                                'Allow Search Engines to Index'
                            )
                            ->default(true),

                        Toggle::make(
                            'robots_follow'
                        )
                            ->label(
                                'Allow Search Engines to Follow Links'
                            )
                            ->default(true),
                    ])
                    ->columns(2),


                /*
                |--------------------------------------------------------------------------
                | STRUCTURED DATA
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Structured Data / Schema'
                )
                    ->schema([

                        Toggle::make(
                            'schema_enabled'
                        )
                            ->label(
                                'Enable Contact Page Schema'
                            )
                            ->default(true),

                        TextInput::make(
                            'schema_business_name'
                        )
                            ->label(
                                'Business Name'
                            )
                            ->default(
                                'Zaitoona Al Andalaus'
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

                        TextInput::make(
                            'schema_latitude'
                        )
                            ->label('Latitude')
                            ->numeric(),

                        TextInput::make(
                            'schema_longitude'
                        )
                            ->label('Longitude')
                            ->numeric(),
                    ])
                    ->columns(2),
            ]);
    }
}