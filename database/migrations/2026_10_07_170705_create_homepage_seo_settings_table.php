<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('homepage_seo_settings', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | General SEO
            |--------------------------------------------------------------------------
            */

            $table->string('site_name')
                ->default('Zaitoona Al Andalus');

            $table->string('seo_title')
                ->nullable();

            $table->text('meta_description')
                ->nullable();

            $table->string('focus_keyword')
                ->nullable();

            $table->string('author')
                ->nullable();

            $table->string('robots')
                ->default(
                    'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'
                );

            $table->text('canonical_url')
                ->nullable();

            $table->string('theme_color', 20)
                ->default('#ffffff');


            /*
            |--------------------------------------------------------------------------
            | Search Engine Verification
            |--------------------------------------------------------------------------
            */

            $table->text('google_site_verification')
                ->nullable();

            $table->text('bing_site_verification')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Favicon
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

            $table->string('schema_type')
                ->default('Restaurant');

            $table->string('schema_name')
                ->nullable();

            $table->text('schema_description')
                ->nullable();

            $table->string('schema_image')
                ->nullable();

            $table->string('schema_logo')
                ->nullable();

            $table->string('schema_telephone')
                ->nullable();

            $table->string('schema_email')
                ->nullable();

            $table->string('schema_price_range')
                ->nullable();

            $table->json('schema_serves_cuisine')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Address
            |--------------------------------------------------------------------------
            */

            $table->string('schema_street_address')
                ->nullable();

            $table->string('schema_locality')
                ->nullable();

            $table->string('schema_region')
                ->nullable();

            $table->string('schema_postal_code')
                ->nullable();

            $table->string('schema_country', 10)
                ->default('QA');

            $table->string('schema_area_served')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Coordinates
            |--------------------------------------------------------------------------
            */

            $table->decimal(
                'schema_latitude',
                10,
                7
            )->nullable();

            $table->decimal(
                'schema_longitude',
                10,
                7
            )->nullable();


            /*
            |--------------------------------------------------------------------------
            | Restaurant Links / Details
            |--------------------------------------------------------------------------
            */

            $table->text('schema_menu_url')
                ->nullable();

            $table->text('schema_reservation_url')
                ->nullable();

            $table->boolean('schema_accepts_reservations')
                ->default(true);

            $table->json('schema_opening_hours')
                ->nullable();

            $table->json('schema_same_as')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Status
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
            'homepage_seo_settings'
        );
    }
};