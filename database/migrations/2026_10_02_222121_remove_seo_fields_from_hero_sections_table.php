<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('hero_sections', function (Blueprint $table) {
            $table->dropColumn([
                // English SEO
                'seo_title_en',
                'seo_description_en',
                'focus_keyword_en',
                'meta_keywords_en',
                'og_title_en',
                'og_description_en',
                'og_image_en',
                'og_image_alt_en',
                'twitter_title_en',
                'twitter_description_en',
                'twitter_image_en',

                // Arabic SEO
                'seo_title_ar',
                'seo_description_ar',
                'focus_keyword_ar',
                'meta_keywords_ar',
                'og_title_ar',
                'og_description_ar',
                'og_image_ar',
                'og_image_alt_ar',
                'twitter_title_ar',
                'twitter_description_ar',
                'twitter_image_ar',

                // Page-level technical SEO
                'canonical_url',
                'robots_index',
                'robots_follow',
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('hero_sections', function (Blueprint $table) {
            // English SEO
            $table->string('seo_title_en')->nullable();
            $table->text('seo_description_en')->nullable();
            $table->string('focus_keyword_en')->nullable();
            $table->text('meta_keywords_en')->nullable();
            $table->string('og_title_en')->nullable();
            $table->text('og_description_en')->nullable();
            $table->string('og_image_en')->nullable();
            $table->string('og_image_alt_en')->nullable();
            $table->string('twitter_title_en')->nullable();
            $table->text('twitter_description_en')->nullable();
            $table->string('twitter_image_en')->nullable();

            // Arabic SEO
            $table->string('seo_title_ar')->nullable();
            $table->text('seo_description_ar')->nullable();
            $table->string('focus_keyword_ar')->nullable();
            $table->text('meta_keywords_ar')->nullable();
            $table->string('og_title_ar')->nullable();
            $table->text('og_description_ar')->nullable();
            $table->string('og_image_ar')->nullable();
            $table->string('og_image_alt_ar')->nullable();
            $table->string('twitter_title_ar')->nullable();
            $table->text('twitter_description_ar')->nullable();
            $table->string('twitter_image_ar')->nullable();

            // Technical SEO
            $table->string('canonical_url')->nullable();
            $table->boolean('robots_index')->default(true);
            $table->boolean('robots_follow')->default(true);
        });
    }
};