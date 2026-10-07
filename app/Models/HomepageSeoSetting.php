<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageSeoSetting extends Model
{
    protected $fillable = [

        'site_name',
        'seo_title',
        'meta_description',
        'focus_keyword',
        'author',
        'robots',
        'canonical_url',
        'theme_color',

        'google_site_verification',
        'bing_site_verification',

        'favicon',
        'apple_touch_icon',

        'og_title',
        'og_description',
        'og_image',
        'og_image_alt',
        'og_locale',

        'twitter_card',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'twitter_image_alt',

        'schema_type',
        'schema_name',
        'schema_description',
        'schema_image',
        'schema_logo',
        'schema_telephone',
        'schema_email',
        'schema_price_range',
        'schema_serves_cuisine',

        'schema_street_address',
        'schema_locality',
        'schema_region',
        'schema_postal_code',
        'schema_country',
        'schema_area_served',

        'schema_latitude',
        'schema_longitude',

        'schema_menu_url',
        'schema_reservation_url',
        'schema_accepts_reservations',
        'schema_opening_hours',
        'schema_same_as',

        'is_active',
    ];


    protected function casts(): array
    {
        return [

            'schema_serves_cuisine' =>
                'array',

            'schema_opening_hours' =>
                'array',

            'schema_same_as' =>
                'array',

            'schema_accepts_reservations' =>
                'boolean',

            'schema_latitude' =>
                'float',

            'schema_longitude' =>
                'float',

            'is_active' =>
                'boolean',

        ];
    }
}