<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Main Content
            |--------------------------------------------------------------------------
            */

            $table->string('title');

            $table->string('slug')
                ->unique();

            $table->text('excerpt')
                ->nullable();

            $table->longText('content');

            $table->string('featured_image')
                ->nullable();

            $table->string('featured_image_alt')
                ->nullable();

            $table->string('category')
                ->nullable();

            $table->json('tags')
                ->nullable();

            $table->string('author_name')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Publishing
            |--------------------------------------------------------------------------
            */

            $table->string('status')
                ->default('draft');

            $table->timestamp('published_at')
                ->nullable();

            $table->boolean('is_active')
                ->default(true);


            /*
            |--------------------------------------------------------------------------
            | SEO
            |--------------------------------------------------------------------------
            */

            $table->string('focus_keyword')
                ->nullable();

            $table->json('secondary_keywords')
                ->nullable();

            $table->string('seo_title')
                ->nullable();

            $table->text('meta_description')
                ->nullable();

            $table->text('canonical_url')
                ->nullable();

            $table->string('robots')
                ->default('index, follow');


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


            /*
            |--------------------------------------------------------------------------
            | X / Twitter
            |--------------------------------------------------------------------------
            */

            $table->string('twitter_title')
                ->nullable();

            $table->text('twitter_description')
                ->nullable();

            $table->string('twitter_image')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Structured Data
            |--------------------------------------------------------------------------
            */

            $table->string('schema_type')
                ->default('BlogPosting');

            $table->string('schema_headline')
                ->nullable();

            $table->text('schema_description')
                ->nullable();

            $table->string('schema_image')
                ->nullable();


            $table->timestamps();

            $table->index([
                'status',
                'is_active',
                'published_at',
            ]);
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};