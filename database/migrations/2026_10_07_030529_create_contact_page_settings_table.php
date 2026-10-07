<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_page_settings', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Page Status
            |--------------------------------------------------------------------------
            */

            $table->boolean('is_active')->default(true);


            /*
            |--------------------------------------------------------------------------
            | Hero
            |--------------------------------------------------------------------------
            */

            $table->string('hero_image')->nullable();

            $table->string('hero_title_en')->nullable();
            $table->string('hero_title_ar')->nullable();

            $table->string('hero_alt_en')->nullable();
            $table->string('hero_alt_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Contact Content - English
            |--------------------------------------------------------------------------
            */

            $table->string('contact_heading_en')->nullable();
            $table->string('contact_sub_en')->nullable();
            $table->text('contact_description_en')->nullable();

            $table->string('email_button_text_en')->nullable();
            $table->string('whatsapp_button_text_en')->nullable();

            $table->string('location_label_en')->nullable();
            $table->string('phone_label_en')->nullable();

            $table->text('address_en')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Contact Content - Arabic
            |--------------------------------------------------------------------------
            */

            $table->string('contact_heading_ar')->nullable();
            $table->string('contact_sub_ar')->nullable();
            $table->text('contact_description_ar')->nullable();

            $table->string('email_button_text_ar')->nullable();
            $table->string('whatsapp_button_text_ar')->nullable();

            $table->string('location_label_ar')->nullable();
            $table->string('phone_label_ar')->nullable();

            $table->text('address_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Contact Information
            |--------------------------------------------------------------------------
            */

            $table->string('email')->nullable();

            $table->string('phone_display')->nullable();
            $table->string('phone_dial')->nullable();

            $table->string('whatsapp')->nullable();

            $table->text('map_embed_url')->nullable();

            $table->string('map_title_en')->nullable();
            $table->string('map_title_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | SEO - English
            |--------------------------------------------------------------------------
            */

            $table->string('seo_title_en')->nullable();
            $table->text('seo_description_en')->nullable();
            $table->string('focus_keyword_en')->nullable();


            /*
            |--------------------------------------------------------------------------
            | SEO - Arabic
            |--------------------------------------------------------------------------
            */

            $table->string('seo_title_ar')->nullable();
            $table->text('seo_description_ar')->nullable();
            $table->string('focus_keyword_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Open Graph
            |--------------------------------------------------------------------------
            */

            $table->string('og_title_en')->nullable();
            $table->string('og_title_ar')->nullable();

            $table->text('og_description_en')->nullable();
            $table->text('og_description_ar')->nullable();

            $table->string('og_image')->nullable();

            $table->string('og_image_alt_en')->nullable();
            $table->string('og_image_alt_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Twitter / X
            |--------------------------------------------------------------------------
            */

            $table->string('twitter_title_en')->nullable();
            $table->string('twitter_title_ar')->nullable();

            $table->text('twitter_description_en')->nullable();
            $table->text('twitter_description_ar')->nullable();

            $table->string('twitter_image')->nullable();

            $table->string('twitter_image_alt_en')->nullable();
            $table->string('twitter_image_alt_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Technical SEO
            |--------------------------------------------------------------------------
            */

            $table->string('canonical_url')->nullable();

            $table->boolean('robots_index')->default(true);
            $table->boolean('robots_follow')->default(true);


            /*
            |--------------------------------------------------------------------------
            | Schema
            |--------------------------------------------------------------------------
            */

            $table->boolean('schema_enabled')->default(true);

            $table->string('schema_business_name')->nullable();

            $table->string('schema_price_range')->nullable();

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


            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'contact_page_settings'
        );
    }
};