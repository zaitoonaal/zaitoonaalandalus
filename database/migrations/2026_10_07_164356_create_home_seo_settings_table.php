<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_seo_settings', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Main SEO
            |--------------------------------------------------------------------------
            */

            $table->string('seo_title')
                ->default(
                    'Zaitoona Al Andalus | Restaurant, Shisha & Coffee Lounge in Doha'
                );

            $table->text('meta_description')
                ->nullable();

            $table->text('meta_keywords')
                ->nullable();

            $table->text('canonical_url')
                ->nullable();

            $table->string('robots')
                ->default(
                    'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'
                );

            $table->string('theme_color')
                ->default('#ffffff');


            /*
            |--------------------------------------------------------------------------
            | Icons
            |--------------------------------------------------------------------------
            */

            $table->string('favicon')
                ->nullable();

            $table->string('apple_touch_icon')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Open Graph
            |--------------------------------------------------------------------------
            */

            $table->string('og_title')
                ->nullable();

            $table->text('og_description')
                ->nullable();

            $table->string('og_image')
                ->nullable();

            $table->string('og_image_alt')
                ->nullable();

            $table->string('og_type')
                ->default('website');

            $table->string('og_locale')
                ->default('en_US');


            /*
            |--------------------------------------------------------------------------
            | Twitter / X
            |--------------------------------------------------------------------------
            */

            $table->string('twitter_card')
                ->default('summary_large_image');

            $table->string('twitter_title')
                ->nullable();

            $table->text('twitter_description')
                ->nullable();

            $table->string('twitter_image')
                ->nullable();

            $table->string('twitter_image_alt')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Restaurant Schema
            |--------------------------------------------------------------------------
            */

            $table->string('schema_name')
                ->default('Zaitoona Al Andalus');

            $table->text('schema_description')
                ->nullable();

            $table->string('schema_image')
                ->nullable();

            $table->string('telephone')
                ->nullable();

            $table->string('price_range')
                ->default('QAR $$-$$$');

            $table->text('serves_cuisine')
                ->nullable();

            $table->string('street_address')
                ->nullable();

            $table->string('address_locality')
                ->default('Doha');

            $table->string('address_region')
                ->nullable();

            $table->string('postal_code')
                ->nullable();

            $table->string('address_country', 10)
                ->default('QA');

            $table->decimal(
                'latitude',
                10,
                7
            )->nullable();

            $table->decimal(
                'longitude',
                11,
                7
            )->nullable();

            $table->time('opening_time')
                ->nullable();

            $table->time('closing_time')
                ->nullable();

            $table->boolean('accepts_reservations')
                ->default(true);

            $table->text('reservation_url')
                ->nullable();

            $table->text('menu_url')
                ->nullable();

            $table->text('same_as')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Search Engine Verification
            |--------------------------------------------------------------------------
            */

            $table->string('google_site_verification')
                ->nullable();

            $table->string('bing_site_verification')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Publishing
            |--------------------------------------------------------------------------
            */

            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'home_seo_settings'
        );
    }
};