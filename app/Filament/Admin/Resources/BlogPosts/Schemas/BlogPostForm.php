<?php

namespace App\Filament\Admin\Resources\BlogPosts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BlogPostForm
{
    public static function configure(
        Schema $schema
    ): Schema {
        return $schema
            ->components([

                /*
                |--------------------------------------------------------------------------
                | ENGLISH BLOG CONTENT
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Blog Content'
                )
                    ->description(
                        'Write and manage the main English blog article.'
                    )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'title'
                        )
                            ->label(
                                'Post Title'
                            )
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText(
                                'Use a clear, descriptive title that accurately represents the article.'
                            ),


                        TextInput::make(
                            'slug'
                        )
                            ->label(
                                'URL Slug'
                            )
                            ->unique(
                                ignoreRecord: true
                            )
                            ->maxLength(255)
                            ->placeholder(
                                'best-restaurant-in-doha'
                            )
                            ->helperText(
                                'Leave empty to generate automatically from the English title.'
                            ),


                        TextInput::make(
                            'category'
                        )
                            ->label(
                                'Category'
                            )
                            ->placeholder(
                                'Food & Dining'
                            )
                            ->maxLength(150),


                        TagsInput::make(
                            'tags'
                        )
                            ->label(
                                'Post Tags'
                            )
                            ->placeholder(
                                'Add a tag'
                            )
                            ->helperText(
                                'Examples: Doha Restaurants, Mediterranean Food, Shisha'
                            )
                            ->columnSpanFull(),


                        Textarea::make(
                            'excerpt'
                        )
                            ->label(
                                'Post Excerpt'
                            )
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText(
                                'Short summary displayed in blog listings and used as an SEO fallback.'
                            ),


                        RichEditor::make(
                            'content'
                        )
                            ->label(
                                'Article Content'
                            )
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([

                                [
                                    'undo',
                                    'redo',
                                ],

                                [
                                    'h2',
                                    'h3',
                                    'h4',
                                ],

                                [
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                ],

                                [
                                    'link',
                                    'blockquote',
                                ],

                                [
                                    'bulletList',
                                    'orderedList',
                                ],

                                [
                                    'table',
                                    'attachFiles',
                                ],

                            ])
                            ->fileAttachmentsDisk(
                                'public'
                            )
                            ->fileAttachmentsDirectory(
                                'blog-content'
                            )
                            ->helperText(
                                'Use H2/H3 headings to structure the article. Avoid using multiple H1 headings because the post title should be the page H1.'
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ARABIC BLOG CONTENT
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Arabic Blog Content'
                )
                    ->description(
                        'Write and manage the Arabic version of the blog article.'
                    )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'title_ar'
                        )
                            ->label(
                                'Arabic Post Title / عنوان المقال'
                            )
                            ->maxLength(255)
                            ->columnSpanFull()
                            ->helperText(
                                'Enter the Arabic version of the article title.'
                            ),


                        TextInput::make(
                            'slug_ar'
                        )
                            ->label(
                                'Arabic URL Slug / الرابط العربي'
                            )
                            ->unique(
                                ignoreRecord: true
                            )
                            ->maxLength(255)
                            ->placeholder(
                                'عنوان-المقال'
                            )
                            ->helperText(
                                'Leave empty to generate automatically from the Arabic title if your model supports Arabic slug generation.'
                            ),


                        TextInput::make(
                            'category_ar'
                        )
                            ->label(
                                'Arabic Category / التصنيف'
                            )
                            ->placeholder(
                                'المأكولات'
                            )
                            ->maxLength(150),


                        TagsInput::make(
                            'tags_ar'
                        )
                            ->label(
                                'Arabic Post Tags / وسوم المقال'
                            )
                            ->placeholder(
                                'أضف وسم'
                            )
                            ->helperText(
                                'Examples: مطاعم الدوحة، المأكولات المتوسطية، الشيشة'
                            )
                            ->columnSpanFull(),


                        Textarea::make(
                            'excerpt_ar'
                        )
                            ->label(
                                'Arabic Post Excerpt / ملخص المقال'
                            )
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText(
                                'Arabic summary displayed in the Arabic blog listing and used as an Arabic SEO fallback.'
                            ),


                        RichEditor::make(
                            'content_ar'
                        )
                            ->label(
                                'Arabic Article Content / محتوى المقال'
                            )
                            ->columnSpanFull()
                            ->toolbarButtons([

                                [
                                    'undo',
                                    'redo',
                                ],

                                [
                                    'h2',
                                    'h3',
                                    'h4',
                                ],

                                [
                                    'bold',
                                    'italic',
                                    'underline',
                                    'strike',
                                ],

                                [
                                    'link',
                                    'blockquote',
                                ],

                                [
                                    'bulletList',
                                    'orderedList',
                                ],

                                [
                                    'table',
                                    'attachFiles',
                                ],

                            ])
                            ->fileAttachmentsDisk(
                                'public'
                            )
                            ->fileAttachmentsDirectory(
                                'blog-content'
                            )
                            ->helperText(
                                'Use Arabic H2/H3 headings to structure the article. The Arabic post title should remain the page H1.'
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | FEATURED IMAGE
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Featured Image'
                )
                    ->description(
                        'Main image used on blog pages and social sharing.'
                    )
                    ->columns(2)
                    ->schema([

                        FileUpload::make(
                            'featured_image'
                        )
                            ->label(
                                'Featured Image'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'blog/featured'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(
                                5120
                            )
                            ->helperText(
                                'Recommended landscape image, ideally at least 1200px wide.'
                            ),


                        TextInput::make(
                            'featured_image_alt'
                        )
                            ->label(
                                'Featured Image ALT Text'
                            )
                            ->maxLength(255)
                            ->helperText(
                                'Describe the actual image naturally. Do not stuff keywords.'
                            ),


                        TextInput::make(
                            'featured_image_alt_ar'
                        )
                            ->label(
                                'Arabic Featured Image ALT / النص البديل العربي'
                            )
                            ->maxLength(255)
                            ->helperText(
                                'Describe the same featured image naturally in Arabic.'
                            )
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | AUTHOR & PUBLISHING
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Publishing'
                )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'author_name'
                        )
                            ->label(
                                'Author Name'
                            )
                            ->placeholder(
                                'Zaitoona Al Andalus'
                            )
                            ->maxLength(150),


                        TextInput::make(
                            'author_name_ar'
                        )
                            ->label(
                                'Arabic Author Name / اسم الكاتب'
                            )
                            ->placeholder(
                                'زيتونة الأندلس'
                            )
                            ->maxLength(150),


                        Select::make(
                            'status'
                        )
                            ->label(
                                'Post Status'
                            )
                            ->options([

                                'draft' =>
                                    'Draft',

                                'published' =>
                                    'Published',

                            ])
                            ->default(
                                'draft'
                            )
                            ->required(),


                        DateTimePicker::make(
                            'published_at'
                        )
                            ->label(
                                'Publish Date / Time'
                            )
                            ->seconds(false)
                            ->helperText(
                                'You can use a future date for scheduled publication.'
                            ),


                        Toggle::make(
                            'is_active'
                        )
                            ->label(
                                'Post Active'
                            )
                            ->default(
                                true
                            )
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ENGLISH PRIMARY SEO
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'SEO Optimization'
                )
                    ->description(
                        'Main Google search settings for the English article.'
                    )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'focus_keyword'
                        )
                            ->label(
                                'Focus Keyword'
                            )
                            ->placeholder(
                                'best Mediterranean restaurant in Doha'
                            )
                            ->maxLength(255)
                            ->helperText(
                                'Used internally to help you optimize the article. This is not output as a meta keywords tag.'
                            ),


                        TagsInput::make(
                            'secondary_keywords'
                        )
                            ->label(
                                'Secondary Keywords'
                            )
                            ->placeholder(
                                'Add keyword'
                            )
                            ->helperText(
                                'Use natural related search phrases. Avoid keyword stuffing.'
                            ),


                        TextInput::make(
                            'seo_title'
                        )
                            ->label(
                                'SEO Title'
                            )
                            ->maxLength(255)
                            ->placeholder(
                                'Best Mediterranean Restaurant in Doha | Zaitoona Al Andalus'
                            )
                            ->helperText(
                                'Leave empty to use the English post title. Keep it descriptive and concise.'
                            )
                            ->columnSpanFull(),


                        Textarea::make(
                            'meta_description'
                        )
                            ->label(
                                'Meta Description'
                            )
                            ->rows(3)
                            ->maxLength(320)
                            ->columnSpanFull()
                            ->helperText(
                                'Write a compelling summary of the page. Avoid repeating keywords unnaturally.'
                            ),


                        TextInput::make(
                            'canonical_url'
                        )
                            ->label(
                                'Canonical URL'
                            )
                            ->url()
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText(
                                'Normally leave empty and use the English post URL automatically.'
                            ),


                        Select::make(
                            'robots'
                        )
                            ->label(
                                'Robots'
                            )
                            ->options([

                                'index, follow' =>
                                    'Index, Follow',

                                'noindex, follow' =>
                                    'Noindex, Follow',

                                'index, nofollow' =>
                                    'Index, Nofollow',

                                'noindex, nofollow' =>
                                    'Noindex, Nofollow',

                            ])
                            ->default(
                                'index, follow'
                            )
                            ->required(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ARABIC PRIMARY SEO
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Arabic SEO Optimization'
                )
                    ->description(
                        'Arabic Google search settings for this article.'
                    )
                    ->columns(2)
                    ->schema([

                        TextInput::make(
                            'focus_keyword_ar'
                        )
                            ->label(
                                'Arabic Focus Keyword / الكلمة المفتاحية الرئيسية'
                            )
                            ->placeholder(
                                'أفضل مطعم متوسطي في الدوحة'
                            )
                            ->maxLength(255)
                            ->helperText(
                                'Used internally for Arabic SEO planning.'
                            ),


                        TagsInput::make(
                            'secondary_keywords_ar'
                        )
                            ->label(
                                'Arabic Secondary Keywords / الكلمات المفتاحية الثانوية'
                            )
                            ->placeholder(
                                'أضف كلمة مفتاحية'
                            )
                            ->helperText(
                                'Add natural Arabic related search phrases.'
                            ),


                        TextInput::make(
                            'seo_title_ar'
                        )
                            ->label(
                                'Arabic SEO Title / عنوان SEO العربي'
                            )
                            ->maxLength(255)
                            ->placeholder(
                                'أفضل مطعم متوسطي في الدوحة | زيتونة الأندلس'
                            )
                            ->helperText(
                                'Leave empty to use the Arabic post title.'
                            )
                            ->columnSpanFull(),


                        Textarea::make(
                            'meta_description_ar'
                        )
                            ->label(
                                'Arabic Meta Description / وصف الميتا العربي'
                            )
                            ->rows(3)
                            ->maxLength(320)
                            ->columnSpanFull()
                            ->helperText(
                                'Write a natural Arabic search description for this article.'
                            ),


                        TextInput::make(
                            'canonical_url_ar'
                        )
                            ->label(
                                'Arabic Canonical URL'
                            )
                            ->url()
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->helperText(
                                'Normally leave empty so Laravel can use the Arabic article URL automatically.'
                            ),


                        Select::make(
                            'robots_ar'
                        )
                            ->label(
                                'Arabic Robots'
                            )
                            ->options([

                                'index, follow' =>
                                    'Index, Follow',

                                'noindex, follow' =>
                                    'Noindex, Follow',

                                'index, nofollow' =>
                                    'Index, Nofollow',

                                'noindex, nofollow' =>
                                    'Noindex, Nofollow',

                            ])
                            ->default(
                                'index, follow'
                            )
                            ->required(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ENGLISH OPEN GRAPH
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Facebook / Open Graph'
                )
                    ->description(
                        'Optional English social sharing overrides. If empty, normal English SEO values will be used.'
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
                                'OG Social Image'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'blog/social'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(
                                5120
                            )
                            ->helperText(
                                'This image can be shared by both English and Arabic versions.'
                            )
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ARABIC OPEN GRAPH
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Arabic Facebook / Open Graph'
                )
                    ->description(
                        'Arabic social sharing text. The same OG image can be reused.'
                    )
                    ->columns(2)
                    ->collapsed()
                    ->schema([

                        TextInput::make(
                            'og_title_ar'
                        )
                            ->label(
                                'Arabic OG Title'
                            )
                            ->maxLength(255)
                            ->columnSpanFull(),


                        Textarea::make(
                            'og_description_ar'
                        )
                            ->label(
                                'Arabic OG Description'
                            )
                            ->rows(3)
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ENGLISH TWITTER / X
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'X / Twitter SEO'
                )
                    ->description(
                        'Optional English social sharing overrides.'
                    )
                    ->columns(2)
                    ->collapsed()
                    ->schema([

                        TextInput::make(
                            'twitter_title'
                        )
                            ->label(
                                'X / Twitter Title'
                            )
                            ->maxLength(255)
                            ->columnSpanFull(),


                        Textarea::make(
                            'twitter_description'
                        )
                            ->label(
                                'X / Twitter Description'
                            )
                            ->rows(3)
                            ->columnSpanFull(),


                        FileUpload::make(
                            'twitter_image'
                        )
                            ->label(
                                'X / Twitter Image'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'blog/twitter'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(
                                5120
                            )
                            ->helperText(
                                'This image can be shared by both language versions.'
                            )
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ARABIC TWITTER / X
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Arabic X / Twitter SEO'
                )
                    ->description(
                        'Arabic social sharing title and description.'
                    )
                    ->columns(2)
                    ->collapsed()
                    ->schema([

                        TextInput::make(
                            'twitter_title_ar'
                        )
                            ->label(
                                'Arabic X / Twitter Title'
                            )
                            ->maxLength(255)
                            ->columnSpanFull(),


                        Textarea::make(
                            'twitter_description_ar'
                        )
                            ->label(
                                'Arabic X / Twitter Description'
                            )
                            ->rows(3)
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | ARTICLE SCHEMA
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Structured Data / Schema'
                )
                    ->description(
                        'Controls BlogPosting / Article structured data used by search engines.'
                    )
                    ->columns(2)
                    ->collapsed()
                    ->schema([

                        Select::make(
                            'schema_type'
                        )
                            ->label(
                                'Schema Type'
                            )
                            ->options([

                                'BlogPosting' =>
                                    'Blog Posting',

                                'Article' =>
                                    'Article',

                                'NewsArticle' =>
                                    'News Article',

                            ])
                            ->default(
                                'BlogPosting'
                            )
                            ->required(),


                        TextInput::make(
                            'schema_headline'
                        )
                            ->label(
                                'Schema Headline'
                            )
                            ->maxLength(255)
                            ->helperText(
                                'Leave empty to use the English post title.'
                            ),


                        Textarea::make(
                            'schema_description'
                        )
                            ->label(
                                'Schema Description'
                            )
                            ->rows(3)
                            ->columnSpanFull()
                            ->helperText(
                                'Leave empty to use the English meta description.'
                            ),


                        TextInput::make(
                            'schema_headline_ar'
                        )
                            ->label(
                                'Arabic Schema Headline'
                            )
                            ->maxLength(255)
                            ->helperText(
                                'Leave empty to use the Arabic post title.'
                            )
                            ->columnSpanFull(),


                        Textarea::make(
                            'schema_description_ar'
                        )
                            ->label(
                                'Arabic Schema Description'
                            )
                            ->rows(3)
                            ->columnSpanFull()
                            ->helperText(
                                'Leave empty to use the Arabic meta description.'
                            ),


                        FileUpload::make(
                            'schema_image'
                        )
                            ->label(
                                'Schema Image'
                            )
                            ->image()
                            ->disk(
                                'public'
                            )
                            ->directory(
                                'blog/schema'
                            )
                            ->visibility(
                                'public'
                            )
                            ->maxSize(
                                5120
                            )
                            ->helperText(
                                'The same structured-data image can be used for both English and Arabic.'
                            )
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}