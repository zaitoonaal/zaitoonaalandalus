<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('experience_sections', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | English Content
            |--------------------------------------------------------------------------
            */

            $table->string('eyebrow_en')->nullable();

            $table->string('title_en');

            $table->text('description_en')->nullable();

            $table->string('list_1_en')->nullable();

            $table->string('list_2_en')->nullable();

            $table->string('list_3_en')->nullable();

            $table->string('button_label_en')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Arabic Content
            |--------------------------------------------------------------------------
            */

            $table->string('eyebrow_ar')->nullable();

            $table->string('title_ar')->nullable();

            $table->text('description_ar')->nullable();

            $table->string('list_1_ar')->nullable();

            $table->string('list_2_ar')->nullable();

            $table->string('list_3_ar')->nullable();

            $table->string('button_label_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Image
            |--------------------------------------------------------------------------
            */

            $table->string('image')->nullable();

            $table->text('image_url')->nullable();

            $table->string('image_alt_en')->nullable();

            $table->string('image_alt_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Button
            |--------------------------------------------------------------------------
            */

            $table->string('button_url')->nullable();

            $table->string('button_style')
                ->default('outline');


            /*
            |--------------------------------------------------------------------------
            | Settings
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
            'experience_sections'
        );
    }
};