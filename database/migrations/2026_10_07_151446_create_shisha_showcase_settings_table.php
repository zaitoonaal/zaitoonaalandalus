<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shisha_showcase_settings', function (Blueprint $table) {
            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Main English Content
            |--------------------------------------------------------------------------
            */

            $table->string('eyebrow_en')->nullable();

            $table->string('title_en');

            $table->text('description_en')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Main Arabic Content
            |--------------------------------------------------------------------------
            */

            $table->string('eyebrow_ar')->nullable();

            $table->string('title_ar')->nullable();

            $table->text('description_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Card 1
            |--------------------------------------------------------------------------
            */

            $table->string('card_1_title_en')->nullable();

            $table->text('card_1_text_en')->nullable();

            $table->string('card_1_title_ar')->nullable();

            $table->text('card_1_text_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Card 2
            |--------------------------------------------------------------------------
            */

            $table->string('card_2_title_en')->nullable();

            $table->text('card_2_text_en')->nullable();

            $table->string('card_2_title_ar')->nullable();

            $table->text('card_2_text_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Card 3
            |--------------------------------------------------------------------------
            */

            $table->string('card_3_title_en')->nullable();

            $table->text('card_3_text_en')->nullable();

            $table->string('card_3_title_ar')->nullable();

            $table->text('card_3_text_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Card 4
            |--------------------------------------------------------------------------
            */

            $table->string('card_4_title_en')->nullable();

            $table->text('card_4_text_en')->nullable();

            $table->string('card_4_title_ar')->nullable();

            $table->text('card_4_text_ar')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Legal Text
            |--------------------------------------------------------------------------
            */

            $table->text('legal_text_en')->nullable();

            $table->text('legal_text_ar')->nullable();


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
        Schema::dropIfExists(
            'shisha_showcase_settings'
        );
    }
};