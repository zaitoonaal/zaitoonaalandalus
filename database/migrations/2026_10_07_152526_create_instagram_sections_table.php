<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('instagram_sections', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Instagram Profile
            |--------------------------------------------------------------------------
            */

            $table->string('handle')
                ->default('@ZAITOONAALANDALUS');

            $table->text('profile_url')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Instagram Posts
            |--------------------------------------------------------------------------
            |
            | Each JSON item can contain:
            |
            | image
            | image_url
            | post_url
            | alt_en
            | alt_ar
            | is_active
            |
            */

            $table->json('posts')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Display Settings
            |--------------------------------------------------------------------------
            */

            $table->unsignedInteger('sort_order')
                ->default(0);

            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();

            $table->index([
                'is_active',
                'sort_order',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(
            'instagram_sections'
        );
    }
};