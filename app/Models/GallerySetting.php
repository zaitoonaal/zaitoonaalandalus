<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GallerySetting extends Model
{
    protected $fillable = [

        /*
        |--------------------------------------------------------------------------
        | General
        |--------------------------------------------------------------------------
        */

        'is_active',


        /*
        |--------------------------------------------------------------------------
        | Hero
        |--------------------------------------------------------------------------
        */

        'hero_image',

        'hero_title_en',
        'hero_title_ar',

        'hero_alt_en',
        'hero_alt_ar',


        /*
        |--------------------------------------------------------------------------
        | Intro
        |--------------------------------------------------------------------------
        */

        'intro_heading_en',
        'intro_heading_ar',

        'intro_text_en',
        'intro_text_ar',


        /*
        |--------------------------------------------------------------------------
        | Gallery
        |--------------------------------------------------------------------------
        */

        'view_label_en',
        'view_label_ar',

        'gallery_blocks',


        /*
        |--------------------------------------------------------------------------
        | SEO
        |--------------------------------------------------------------------------
        */

        'seo_title_en',
        'seo_description_en',

        'seo_title_ar',
        'seo_description_ar',


        /*
        |--------------------------------------------------------------------------
        | Open Graph
        |--------------------------------------------------------------------------
        */

        'og_title_en',
        'og_title_ar',

        'og_description_en',
        'og_description_ar',

        'og_image',

        'og_image_alt_en',
        'og_image_alt_ar',


        /*
        |--------------------------------------------------------------------------
        | Technical SEO
        |--------------------------------------------------------------------------
        */

        'canonical_url',

        'robots_index',
        'robots_follow',
    ];


    protected function casts(): array
    {
        return [

            'is_active' =>
                'boolean',

            'gallery_blocks' =>
                'array',

            'robots_index' =>
                'boolean',

            'robots_follow' =>
                'boolean',

        ];
    }
}