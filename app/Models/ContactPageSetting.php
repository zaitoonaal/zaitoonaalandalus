<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPageSetting extends Model
{
    protected $fillable = [

        'is_active',

        'hero_image',

        'hero_title_en',
        'hero_title_ar',

        'hero_alt_en',
        'hero_alt_ar',

        'contact_heading_en',
        'contact_sub_en',
        'contact_description_en',

        'email_button_text_en',
        'whatsapp_button_text_en',

        'location_label_en',
        'phone_label_en',

        'address_en',

        'contact_heading_ar',
        'contact_sub_ar',
        'contact_description_ar',

        'email_button_text_ar',
        'whatsapp_button_text_ar',

        'location_label_ar',
        'phone_label_ar',

        'address_ar',

        'email',

        'phone_display',
        'phone_dial',

        'whatsapp',

        'map_embed_url',

        'map_title_en',
        'map_title_ar',

        'seo_title_en',
        'seo_description_en',
        'focus_keyword_en',

        'seo_title_ar',
        'seo_description_ar',
        'focus_keyword_ar',

        'og_title_en',
        'og_title_ar',

        'og_description_en',
        'og_description_ar',

        'og_image',

        'og_image_alt_en',
        'og_image_alt_ar',

        'twitter_title_en',
        'twitter_title_ar',

        'twitter_description_en',
        'twitter_description_ar',

        'twitter_image',

        'twitter_image_alt_en',
        'twitter_image_alt_ar',

        'canonical_url',

        'robots_index',
        'robots_follow',

        'schema_enabled',
        'schema_business_name',
        'schema_price_range',

        'schema_latitude',
        'schema_longitude',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',

            'robots_index' => 'boolean',
            'robots_follow' => 'boolean',

            'schema_enabled' => 'boolean',

            'schema_latitude' => 'decimal:7',
            'schema_longitude' => 'decimal:7',
        ];
    }
}