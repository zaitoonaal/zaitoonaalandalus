<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $fillable = [

        /*
        |--------------------------------------------------------------------------
        | English Content
        |--------------------------------------------------------------------------
        */

        'title',
        'slug',
        'excerpt',
        'content',

        'featured_image',
        'featured_image_alt',

        'category',
        'tags',
        'author_name',


        /*
        |--------------------------------------------------------------------------
        | Arabic Content
        |--------------------------------------------------------------------------
        */

        'title_ar',
        'excerpt_ar',
        'content_ar',

        'featured_image_alt_ar',

        'category_ar',
        'tags_ar',
        'author_name_ar',


        /*
        |--------------------------------------------------------------------------
        | Publishing
        |--------------------------------------------------------------------------
        */

        'status',
        'published_at',
        'is_active',


        /*
        |--------------------------------------------------------------------------
        | English SEO
        |--------------------------------------------------------------------------
        */

        'focus_keyword',
        'secondary_keywords',

        'seo_title',
        'meta_description',
        'canonical_url',
        'robots',


        /*
        |--------------------------------------------------------------------------
        | Arabic SEO
        |--------------------------------------------------------------------------
        */

        'focus_keyword_ar',
        'secondary_keywords_ar',

        'seo_title_ar',
        'meta_description_ar',
        'canonical_url_ar',
        'robots_ar',


        /*
        |--------------------------------------------------------------------------
        | English Open Graph
        |--------------------------------------------------------------------------
        */

        'og_title',
        'og_description',
        'og_image',


        /*
        |--------------------------------------------------------------------------
        | Arabic Open Graph
        |--------------------------------------------------------------------------
        */

        'og_title_ar',
        'og_description_ar',
        'og_image_ar',


        /*
        |--------------------------------------------------------------------------
        | English Twitter / X
        |--------------------------------------------------------------------------
        */

        'twitter_title',
        'twitter_description',
        'twitter_image',


        /*
        |--------------------------------------------------------------------------
        | Arabic Twitter / X
        |--------------------------------------------------------------------------
        */

        'twitter_title_ar',
        'twitter_description_ar',
        'twitter_image_ar',


        /*
        |--------------------------------------------------------------------------
        | Structured Data
        |--------------------------------------------------------------------------
        */

        'schema_type',

        'schema_headline',
        'schema_description',
        'schema_image',

        'schema_headline_ar',
        'schema_description_ar',
        'schema_image_ar',
    ];


    /*
    |--------------------------------------------------------------------------
    | Casts
    |--------------------------------------------------------------------------
    */

    protected function casts(): array
    {
        return [

            /*
            |--------------------------------------------------------------------------
            | English
            |--------------------------------------------------------------------------
            */

            'tags' =>
                'array',

            'secondary_keywords' =>
                'array',


            /*
            |--------------------------------------------------------------------------
            | Arabic
            |--------------------------------------------------------------------------
            */

            'tags_ar' =>
                'array',

            'secondary_keywords_ar' =>
                'array',


            /*
            |--------------------------------------------------------------------------
            | Publishing
            |--------------------------------------------------------------------------
            */

            'published_at' =>
                'datetime',

            'is_active' =>
                'boolean',

        ];
    }


    /*
    |--------------------------------------------------------------------------
    | Automatic Unique Slug
    |--------------------------------------------------------------------------
    |
    | Existing behavior is preserved.
    |
    | We use one stable slug for the article instead of automatically changing
    | the URL when Arabic content is selected.
    |
    */

    protected static function booted(): void
    {
        static::saving(
            function (BlogPost $post) {

                if (
                    blank(
                        $post->slug
                    )
                ) {

                    $post->slug =
                        static::generateUniqueSlug(
                            $post->title,
                            $post->id
                        );

                }

            }
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Generate Unique Slug
    |--------------------------------------------------------------------------
    */

    public static function generateUniqueSlug(
        string $title,
        ?int $ignoreId = null
    ): string {

        $baseSlug =
            Str::slug(
                $title
            );


        if (
            blank(
                $baseSlug
            )
        ) {

            $baseSlug =
                'blog-post';

        }


        $slug =
            $baseSlug;


        $counter =
            2;


        while (
            static::query()

                ->where(
                    'slug',
                    $slug
                )

                ->when(
                    $ignoreId,
                    fn ($query) =>
                        $query->where(
                            'id',
                            '!=',
                            $ignoreId
                        )
                )

                ->exists()
        ) {

            $slug =
                $baseSlug
                . '-'
                . $counter;


            $counter++;

        }


        return $slug;
    }


    /*
    |--------------------------------------------------------------------------
    | Published Scope
    |--------------------------------------------------------------------------
    */

    public function scopePublished(
        $query
    ) {
        return $query

            ->where(
                'status',
                'published'
            )

            ->where(
                'is_active',
                true
            )

            ->where(
                function ($query) {

                    $query

                        ->whereNull(
                            'published_at'
                        )

                        ->orWhere(
                            'published_at',
                            '<=',
                            now()
                        );

                }
            );
    }


    /*
    |--------------------------------------------------------------------------
    | English SEO Fallbacks
    |--------------------------------------------------------------------------
    */

    public function getFinalSeoTitleAttribute(): string
    {
        return $this->seo_title
            ?: $this->title;
    }


    public function getFinalMetaDescriptionAttribute(): string
    {
        /*
        |--------------------------------------------------------------------------
        | Explicit Meta Description
        |--------------------------------------------------------------------------
        */

        if (
            filled(
                $this->meta_description
            )
        ) {

            return $this->meta_description;

        }


        /*
        |--------------------------------------------------------------------------
        | Excerpt Fallback
        |--------------------------------------------------------------------------
        */

        if (
            filled(
                $this->excerpt
            )
        ) {

            return Str::limit(
                strip_tags(
                    $this->excerpt
                ),
                160
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Article Content Fallback
        |--------------------------------------------------------------------------
        */

        return Str::limit(
            strip_tags(
                $this->content
            ),
            160
        );
    }


    public function getFinalOgTitleAttribute(): string
    {
        return $this->og_title
            ?: $this->final_seo_title;
    }


    public function getFinalOgDescriptionAttribute(): string
    {
        return $this->og_description
            ?: $this->final_meta_description;
    }


    public function getFinalTwitterTitleAttribute(): string
    {
        return $this->twitter_title
            ?: $this->final_seo_title;
    }


    public function getFinalTwitterDescriptionAttribute(): string
    {
        return $this->twitter_description
            ?: $this->final_meta_description;
    }


    public function getFinalSchemaHeadlineAttribute(): string
    {
        return $this->schema_headline
            ?: $this->title;
    }


    public function getFinalSchemaDescriptionAttribute(): string
    {
        return $this->schema_description
            ?: $this->final_meta_description;
    }


    /*
    |--------------------------------------------------------------------------
    | Arabic Content Fallbacks
    |--------------------------------------------------------------------------
    |
    | If an Arabic field has not been entered yet, Laravel safely falls back
    | to the English content instead of returning blank content.
    |
    */

    public function getFinalTitleArAttribute(): string
    {
        return $this->title_ar
            ?: $this->title;
    }


    public function getFinalExcerptArAttribute(): string
    {
        if (
            filled(
                $this->excerpt_ar
            )
        ) {

            return $this->excerpt_ar;

        }


        if (
            filled(
                $this->excerpt
            )
        ) {

            return $this->excerpt;

        }


        return Str::limit(
            strip_tags(
                $this->content_ar
                ?: $this->content
            ),
            180
        );
    }


    public function getFinalContentArAttribute(): string
    {
        return $this->content_ar
            ?: $this->content;
    }


    public function getFinalCategoryArAttribute(): string
    {
        return $this->category_ar
            ?: (
                $this->category
                ?: 'Journal'
            );
    }


    public function getFinalAuthorNameArAttribute(): string
    {
        return $this->author_name_ar
            ?: (
                $this->author_name
                ?: 'Zaitoona Al Andalus'
            );
    }


    public function getFinalFeaturedImageAltArAttribute(): string
    {
        return $this->featured_image_alt_ar
            ?: (
                $this->featured_image_alt
                ?: $this->final_title_ar
            );
    }


    /*
    |--------------------------------------------------------------------------
    | Arabic SEO Fallbacks
    |--------------------------------------------------------------------------
    */

    public function getFinalSeoTitleArAttribute(): string
    {
        return $this->seo_title_ar
            ?: $this->final_title_ar;
    }


    public function getFinalMetaDescriptionArAttribute(): string
    {
        /*
        |--------------------------------------------------------------------------
        | Arabic Meta Description
        |--------------------------------------------------------------------------
        */

        if (
            filled(
                $this->meta_description_ar
            )
        ) {

            return $this->meta_description_ar;

        }


        /*
        |--------------------------------------------------------------------------
        | Arabic Excerpt
        |--------------------------------------------------------------------------
        */

        if (
            filled(
                $this->excerpt_ar
            )
        ) {

            return Str::limit(
                strip_tags(
                    $this->excerpt_ar
                ),
                160
            );

        }


        /*
        |--------------------------------------------------------------------------
        | Arabic Article Content
        |--------------------------------------------------------------------------
        */

        if (
            filled(
                $this->content_ar
            )
        ) {

            return Str::limit(
                strip_tags(
                    $this->content_ar
                ),
                160
            );

        }


        /*
        |--------------------------------------------------------------------------
        | English SEO Fallback
        |--------------------------------------------------------------------------
        */

        return $this->final_meta_description;
    }


    public function getFinalCanonicalUrlArAttribute(): ?string
    {
        return $this->canonical_url_ar
            ?: $this->canonical_url;
    }


    public function getFinalRobotsArAttribute(): string
    {
        return $this->robots_ar
            ?: (
                $this->robots
                ?: 'index, follow'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | Arabic Open Graph Fallbacks
    |--------------------------------------------------------------------------
    */

    public function getFinalOgTitleArAttribute(): string
    {
        return $this->og_title_ar
            ?: $this->final_seo_title_ar;
    }


    public function getFinalOgDescriptionArAttribute(): string
    {
        return $this->og_description_ar
            ?: $this->final_meta_description_ar;
    }


    public function getFinalOgImageArAttribute(): ?string
    {
        return $this->og_image_ar
            ?: $this->og_image;
    }


    /*
    |--------------------------------------------------------------------------
    | Arabic Twitter / X Fallbacks
    |--------------------------------------------------------------------------
    */

    public function getFinalTwitterTitleArAttribute(): string
    {
        return $this->twitter_title_ar
            ?: $this->final_seo_title_ar;
    }


    public function getFinalTwitterDescriptionArAttribute(): string
    {
        return $this->twitter_description_ar
            ?: $this->final_meta_description_ar;
    }


    public function getFinalTwitterImageArAttribute(): ?string
    {
        return $this->twitter_image_ar
            ?: $this->twitter_image;
    }


    /*
    |--------------------------------------------------------------------------
    | Arabic Structured Data Fallbacks
    |--------------------------------------------------------------------------
    */

    public function getFinalSchemaHeadlineArAttribute(): string
    {
        return $this->schema_headline_ar
            ?: $this->final_title_ar;
    }


    public function getFinalSchemaDescriptionArAttribute(): string
    {
        return $this->schema_description_ar
            ?: $this->final_meta_description_ar;
    }


    public function getFinalSchemaImageArAttribute(): ?string
    {
        return $this->schema_image_ar
            ?: $this->schema_image;
    }


    /*
    |--------------------------------------------------------------------------
    | Language Helper
    |--------------------------------------------------------------------------
    |
    | Allows Blade/controller code to request the appropriate content cleanly.
    |
    | Example:
    |
    | $post->localized('title', 'ar')
    |
    */

    public function localized(
        string $field,
        ?string $locale = null
    ): mixed {

        $locale =
            $locale
            ?: app()->getLocale();


        if (
            $locale === 'ar'
        ) {

            $arabicField =
                $field
                . '_ar';


            if (
                filled(
                    $this->{$arabicField}
                    ?? null
                )
            ) {

                return $this->{$arabicField};

            }

        }


        return $this->{$field}
            ?? null;
    }
}