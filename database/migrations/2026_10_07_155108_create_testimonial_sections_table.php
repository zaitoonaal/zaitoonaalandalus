<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('testimonial_sections', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Section Heading
            |--------------------------------------------------------------------------
            */

            $table->string('eyebrow_en')
                ->default('What the evening should feel like');

            $table->string('eyebrow_ar')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Testimonials
            |--------------------------------------------------------------------------
            |
            | Stored as JSON because this is one homepage section containing
            | multiple testimonial slides.
            |
            */

            $table->json('testimonials')
                ->nullable();


            /*
            |--------------------------------------------------------------------------
            | Settings
            |--------------------------------------------------------------------------
            */

            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonial_sections');
    }
};