<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hero_sections', function (Blueprint $table) {
            $table->id();

            // General settings
            $table->boolean('is_active')->default(true);

            $table->string('video_path')->nullable();
            $table->string('video_poster_path')->nullable();

            $table->string('reserve_url')->default('/reserveatable');
            $table->string('menu_url')->default('/menu');
            $table->string('scroll_target')->default('#about');

            // ===========================
            // ENGLISH HERO
            // ===========================

            $table->string('kicker_en')->nullable();

            $table->string('title_line_1_en')->nullable();
            $table->string('title_line_2_en')->nullable();
            $table->string('title_line_3_en')->nullable();

            $table->text('description_en')->nullable();

            $table->string('reserve_text_en')->nullable();
            $table->string('menu_text_en')->nullable();

            $table->string('meta_1_title_en')->nullable();
            $table->string('meta_1_text_en')->nullable();

            $table->string('meta_2_title_en')->nullable();
            $table->string('meta_2_text_en')->nullable();

            $table->string('meta_3_title_en')->nullable();
            $table->string('meta_3_text_en')->nullable();

            $table->string('scroll_aria_en')->nullable();

            // ===========================
            // ARABIC HERO
            // ===========================

            $table->string('kicker_ar')->nullable();

            $table->string('title_line_1_ar')->nullable();
            $table->string('title_line_2_ar')->nullable();
            $table->string('title_line_3_ar')->nullable();

            $table->text('description_ar')->nullable();

            $table->string('reserve_text_ar')->nullable();
            $table->string('menu_text_ar')->nullable();

            $table->string('meta_1_title_ar')->nullable();
            $table->string('meta_1_text_ar')->nullable();

            $table->string('meta_2_title_ar')->nullable();
            $table->string('meta_2_text_ar')->nullable();

            $table->string('meta_3_title_ar')->nullable();
            $table->string('meta_3_text_ar')->nullable();

            $table->string('scroll_aria_ar')->nullable();

            // ===========================
            // ENGLISH SEO
            // ===========================

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

            // ===========================
            // ARABIC SEO
            // ===========================

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

            // ===========================
            // TECHNICAL SEO
            // ===========================

            $table->string('canonical_url')->nullable();

            $table->boolean('robots_index')->default(true);
            $table->boolean('robots_follow')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hero_sections');
    }
};