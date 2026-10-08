<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {

            /*
            |--------------------------------------------------------------------------
            | Arabic Main Content
            |--------------------------------------------------------------------------
            */

            $table->string('title_ar')
                ->nullable()
                ->after('title');

            $table->string('slug_ar')
                ->nullable()
                ->unique()
                ->after('slug');

            $table->text('excerpt_ar')
                ->nullable()
                ->after('excerpt');

            $table->longText('content_ar')
                ->nullable()
                ->after('content');

            $table->string('featured_image_alt_ar')
                ->nullable()
                ->after('featured_image_alt');

            $table->string('category_ar')
                ->nullable()
                ->after('category');

            $table->json('tags_ar')
                ->nullable()
                ->after('tags');

            $table->string('author_name_ar')
                ->nullable()
                ->after('author_name');


            /*
            |--------------------------------------------------------------------------
            | Arabic SEO
            |--------------------------------------------------------------------------
            */

            $table->string('focus_keyword_ar')
                ->nullable()
                ->after('focus_keyword');

            $table->json('secondary_keywords_ar')
                ->nullable()
                ->after('secondary_keywords');

            $table->string('seo_title_ar')
                ->nullable()
                ->after('seo_title');

            $table->text('meta_description_ar')
                ->nullable()
                ->after('meta_description');

            $table->text('canonical_url_ar')
                ->nullable()
                ->after('canonical_url');

            $table->string('robots_ar')
                ->default('index, follow')
                ->after('robots');


            /*
            |--------------------------------------------------------------------------
            | Arabic Open Graph
            |--------------------------------------------------------------------------
            */

            $table->string('og_title_ar')
                ->nullable()
                ->after('og_title');

            $table->text('og_description_ar')
                ->nullable()
                ->after('og_description');


            /*
            |--------------------------------------------------------------------------
            | Arabic Twitter / X
            |--------------------------------------------------------------------------
            */

            $table->string('twitter_title_ar')
                ->nullable()
                ->after('twitter_title');

            $table->text('twitter_description_ar')
                ->nullable()
                ->after('twitter_description');


            /*
            |--------------------------------------------------------------------------
            | Arabic Structured Data
            |--------------------------------------------------------------------------
            */

            $table->string('schema_headline_ar')
                ->nullable()
                ->after('schema_headline');

            $table->text('schema_description_ar')
                ->nullable()
                ->after('schema_description');
        });
    }


    public function down(): void
    {
        Schema::table('blog_posts', function (Blueprint $table) {

            $table->dropUnique(
                'blog_posts_slug_ar_unique'
            );

            $table->dropColumn([

                'title_ar',
                'slug_ar',

                'excerpt_ar',
                'content_ar',

                'featured_image_alt_ar',

                'category_ar',
                'tags_ar',
                'author_name_ar',

                'focus_keyword_ar',
                'secondary_keywords_ar',

                'seo_title_ar',
                'meta_description_ar',
                'canonical_url_ar',
                'robots_ar',

                'og_title_ar',
                'og_description_ar',

                'twitter_title_ar',
                'twitter_description_ar',

                'schema_headline_ar',
                'schema_description_ar',

            ]);
        });
    }
};