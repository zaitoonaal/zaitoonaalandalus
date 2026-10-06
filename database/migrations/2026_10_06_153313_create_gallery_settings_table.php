<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gallery_settings', function (Blueprint $table) {
            $table->id();

            // Page control
            $table->boolean('is_active')->default(true);

            // Gallery Hero
            $table->string('hero_image')->nullable();

            $table->string('hero_title_en')->nullable();
            $table->string('hero_title_ar')->nullable();

            $table->string('hero_alt_en')->nullable();
            $table->string('hero_alt_ar')->nullable();

            // Gallery Intro
            $table->string('intro_heading_en')->nullable();
            $table->string('intro_heading_ar')->nullable();

            $table->text('intro_text_en')->nullable();
            $table->text('intro_text_ar')->nullable();

            // Hover label
            $table->string('view_label_en')->default('View');
            $table->string('view_label_ar')->default('عرض');

            // Dynamic gallery blocks
            $table->json('gallery_blocks')->nullable();

            // Page SEO - English
            $table->string('seo_title_en')->nullable();
            $table->text('seo_description_en')->nullable();

            // Page SEO - Arabic
            $table->string('seo_title_ar')->nullable();
            $table->text('seo_description_ar')->nullable();

            // Open Graph
            $table->string('og_title_en')->nullable();
            $table->string('og_title_ar')->nullable();

            $table->text('og_description_en')->nullable();
            $table->text('og_description_ar')->nullable();

            $table->string('og_image')->nullable();

            $table->string('og_image_alt_en')->nullable();
            $table->string('og_image_alt_ar')->nullable();

            // Technical SEO
            $table->string('canonical_url')->nullable();

            $table->boolean('robots_index')->default(true);
            $table->boolean('robots_follow')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery_settings');
    }
};