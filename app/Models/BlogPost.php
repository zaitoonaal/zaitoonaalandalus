<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    protected $fillable = [

        /*
        |--------------------------------------------------------------------------
        | Content
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
        | Publishing
        |--------------------------------------------------------------------------
        */

        'status',
        'published_at',
        'is_active',


        /*
        |--------------------------------------------------------------------------
        | SEO
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
        | Open Graph
        |--------------------------------------------------------------------------
        */

        'og_title',
        'og_description',
        'og_image',


        /*
        |--------------------------------------------------------------------------
        | Twitter / X
        |--------------------------------------------------------------------------
        */

        'twitter_title',
        'twitter_description',
        'twitter_image',


        /*
        |--------------------------------------------------------------------------
        | Schema
        |--------------------------------------------------------------------------
        */

        'schema_type',
        'schema_headline',
        'schema_description',
        'schema_image',
    ];


    protected function casts(): array
    {
        return [

            'tags' =>
                'array',

            'secondary_keywords' =>
                'array',

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
    */

    protected static function booted(): void
    {
        static::saving(
            function (BlogPost $post) {

                if (
                    blank($post->slug)
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


    public static function generateUniqueSlug(
        string $title,
        ?int $ignoreId = null
    ): string {

        $baseSlug =
            Str::slug($title);


        if (
            blank($baseSlug)
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
    | SEO Fallbacks
    |--------------------------------------------------------------------------
    */

    public function getFinalSeoTitleAttribute(): string
    {
        return $this->seo_title
            ?: $this->title;
    }


    public function getFinalMetaDescriptionAttribute(): string
    {
        if (
            filled(
                $this->meta_description
            )
        ) {

            return $this->meta_description;
        }


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
}