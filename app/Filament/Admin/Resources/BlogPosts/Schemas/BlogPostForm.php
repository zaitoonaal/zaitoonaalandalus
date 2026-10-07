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
                | BLOG CONTENT
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Blog Content'
                )
                    ->description(
                        'Write and manage the main blog article.'
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
                                'Leave empty to generate automatically from the title.'
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
                            ),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | PRIMARY SEO
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'SEO Optimization'
                )
                    ->description(
                        'Main Google search settings for this post.'
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
                                'Leave empty to use the post title. Keep it descriptive and concise.'
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
                                'Normally leave empty and use the post URL automatically. Only set this when another URL should be canonical.'
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
                | OPEN GRAPH
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'Facebook / Open Graph'
                )
                    ->description(
                        'Optional. If empty, the normal SEO values will be used.'
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
                            ->columnSpanFull(),

                    ]),


                /*
                |--------------------------------------------------------------------------
                | TWITTER / X
                |--------------------------------------------------------------------------
                */

                Section::make(
                    'X / Twitter SEO'
                )
                    ->description(
                        'Optional social sharing overrides.'
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
                                'Leave empty to use the post title.'
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
                                'Leave empty to use the meta description.'
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
                            ->columnSpanFull(),

                    ]),

            ]);
    }
}