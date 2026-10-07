<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSeoSetting extends Model
{
    protected $fillable = [

        'seo_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'robots',
        'theme_color',

        'favicon',
        'apple_touch_icon',

        'og_title',
        'og_description',
        'og_image',
        'og_image_alt',
        'og_type',
        'og_locale',

        'twitter_card',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'twitter_image_alt',

        'schema_name',
        'schema_description',
        'schema_image',
        'telephone',
        'price_range',
        'serves_cuisine',

        'street_address',
        'address_locality',
        'address_region',
        'postal_code',
        'address_country',

        'latitude',
        'longitude',

        'opening_time',
        'closing_time',

        'accepts_reservations',
        'reservation_url',
        'menu_url',
        'same_as',

        'google_site_verification',
        'bing_site_verification',

        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'accepts_reservations' =>
                'boolean',

            'is_active' =>
                'boolean',

            'latitude' =>
                'decimal:7',

            'longitude' =>
                'decimal:7',
        ];
    }
}