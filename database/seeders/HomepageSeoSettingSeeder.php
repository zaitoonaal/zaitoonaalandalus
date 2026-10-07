<?php

namespace Database\Seeders;

use App\Models\HomepageSeoSetting;
use Illuminate\Database\Seeder;

class HomepageSeoSettingSeeder extends Seeder
{
    public function run(): void
    {
        HomepageSeoSetting::updateOrCreate(
            [
                'id' => 1,
            ],
            [
                'site_name' =>
                    'Zaitoona Al Andalus',

                'seo_title' =>
                    'Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha',

                'meta_description' =>
                    'Zaitoona Al Andalus is a premium restaurant, shisha and coffee lounge in Doha, Qatar, offering Mediterranean dining, refined shisha, Arabic coffee and relaxed hospitality.',

                'focus_keyword' =>
                    'restaurant shisha coffee lounge in Doha',

                'author' =>
                    'Zaitoona Al Andalus',

                'robots' =>
                    'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',

                'theme_color' =>
                    '#ffffff',

                'og_title' =>
                    'Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha',

                'og_description' =>
                    'Discover Zaitoona Al Andalus in Doha, Qatar — Mediterranean dining, refined shisha, specialty coffee and relaxed hospitality.',

                'og_image_alt' =>
                    'Zaitoona Al Andalus Restaurant, Shisha and Coffee Lounge in Doha',

                'og_locale' =>
                    'en_US',

                'twitter_card' =>
                    'summary_large_image',

                'twitter_title' =>
                    'Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha',

                'twitter_description' =>
                    'A premium Doha destination for Mediterranean dining, refined shisha, specialty coffee and relaxed hospitality.',

                'twitter_image_alt' =>
                    'Zaitoona Al Andalus Restaurant in Doha, Qatar',

                'schema_type' =>
                    'Restaurant',

                'schema_name' =>
                    'Zaitoona Al Andalus',

                'schema_description' =>
                    'Zaitoona Al Andalus is a premium restaurant, shisha and coffee lounge in Doha, Qatar, offering Mediterranean and Middle Eastern dining, refined shisha and specialty coffee.',

                'schema_telephone' =>
                    '+97433858316',

                'schema_email' =>
                    'hello@zaitoona.qa',

                'schema_price_range' =>
                    'QAR $$-$$$',

                'schema_serves_cuisine' => [
                    'Mediterranean',
                    'Middle Eastern',
                    'Arabic',
                ],

                'schema_street_address' =>
                    'Old Airport, Near Food Place, Building No. 26, Zone 45, Street No 840',

                'schema_locality' =>
                    'Doha',

                'schema_country' =>
                    'QA',

                'schema_area_served' =>
                    'Doha',

                'schema_menu_url' =>
                    url('/menu'),

                'schema_reservation_url' =>
                    url('/reserveatable'),

                'schema_accepts_reservations' =>
                    true,

                'schema_opening_hours' => [
                    [
                        'days' => [
                            'Monday',
                            'Tuesday',
                            'Wednesday',
                            'Thursday',
                            'Friday',
                            'Saturday',
                            'Sunday',
                        ],

                        'opens' =>
                            '10:00',

                        'closes' =>
                            '02:00',
                    ],
                ],

                'is_active' =>
                    true,
            ]
        );
    }
}