<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuSetting extends Model
{
    protected $fillable = [
        'is_active',
        'banner_image',

        'eyebrow_en',
        'title_en',
        'intro_en',
        'menu_note_en',
        'menu_footer_en',
        'reserve_text_en',
        'search_placeholder_en',
        'empty_message_en',

        'eyebrow_ar',
        'title_ar',
        'intro_ar',
        'menu_note_ar',
        'menu_footer_ar',
        'reserve_text_ar',
        'search_placeholder_ar',
        'empty_message_ar',

        'reserve_url',
        'currency_label',

        'menu_categories',

        'seo_title_en',
        'seo_description_en',
        'focus_keyword_en',

        'og_title_en',
        'og_description_en',
        'og_image_alt_en',

        'twitter_title_en',
        'twitter_description_en',
        'twitter_image_alt_en',

        'seo_title_ar',
        'seo_description_ar',
        'focus_keyword_ar',

        'og_title_ar',
        'og_description_ar',
        'og_image_alt_ar',

        'twitter_title_ar',
        'twitter_description_ar',
        'twitter_image_alt_ar',

        'og_image',
        'twitter_image',
        'canonical_url',

        'robots_index',
        'robots_follow',

        'schema_enabled',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'menu_categories' => 'array',

            'robots_index' => 'boolean',
            'robots_follow' => 'boolean',
            'schema_enabled' => 'boolean',
        ];
    }
}