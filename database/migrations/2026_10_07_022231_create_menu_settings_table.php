<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menu_settings', function (Blueprint $table) {
            $table->id();

            // Page
            $table->boolean('is_active')->default(true);

            // Banner
            $table->string('banner_image')->nullable();

            // English page content
            $table->string('eyebrow_en')->nullable();
            $table->string('title_en')->nullable();
            $table->text('intro_en')->nullable();
            $table->string('menu_note_en')->nullable();
            $table->text('menu_footer_en')->nullable();
            $table->string('reserve_text_en')->nullable();
            $table->string('search_placeholder_en')->nullable();
            $table->string('empty_message_en')->nullable();

            // Arabic page content
            $table->string('eyebrow_ar')->nullable();
            $table->string('title_ar')->nullable();
            $table->text('intro_ar')->nullable();
            $table->string('menu_note_ar')->nullable();
            $table->text('menu_footer_ar')->nullable();
            $table->string('reserve_text_ar')->nullable();
            $table->string('search_placeholder_ar')->nullable();
            $table->string('empty_message_ar')->nullable();

            // General
            $table->string('reserve_url')->default('/reserveatable');
            $table->string('currency_label')->default('QR');

            // Categories + items
            $table->json('menu_categories')->nullable();

            /*
            |--------------------------------------------------------------------------
            | ENGLISH SEO
            |--------------------------------------------------------------------------
            */

            $table->string('seo_title_en')->nullable();
            $table->text('seo_description_en')->nullable();
            $table->string('focus_keyword_en')->nullable();

            $table->string('og_title_en')->nullable();
            $table->text('og_description_en')->nullable();
            $table->string('og_image_alt_en')->nullable();

            $table->string('twitter_title_en')->nullable();
            $table->text('twitter_description_en')->nullable();
            $table->string('twitter_image_alt_en')->nullable();

            /*
            |--------------------------------------------------------------------------
            | ARABIC SEO
            |--------------------------------------------------------------------------
            */

            $table->string('seo_title_ar')->nullable();
            $table->text('seo_description_ar')->nullable();
            $table->string('focus_keyword_ar')->nullable();

            $table->string('og_title_ar')->nullable();
            $table->text('og_description_ar')->nullable();
            $table->string('og_image_alt_ar')->nullable();

            $table->string('twitter_title_ar')->nullable();
            $table->text('twitter_description_ar')->nullable();
            $table->string('twitter_image_alt_ar')->nullable();

            /*
            |--------------------------------------------------------------------------
            | SHARED SEO
            |--------------------------------------------------------------------------
            */

            $table->string('og_image')->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('canonical_url')->nullable();

            $table->boolean('robots_index')->default(true);
            $table->boolean('robots_follow')->default(true);

            $table->boolean('schema_enabled')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menu_settings');
    }
};