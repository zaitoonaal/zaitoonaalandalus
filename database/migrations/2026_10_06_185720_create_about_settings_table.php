<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('about_settings', function (Blueprint $table) {
        $table->id();
        
        // Intro Texts (JSON for EN/AR)
        $table->json('intro_eyebrow')->nullable();
        $table->json('intro_title')->nullable();
        $table->json('intro_copy')->nullable();
        $table->json('detail1_title')->nullable();
        $table->json('detail1_text')->nullable();
        $table->json('detail2_title')->nullable();
        $table->json('detail2_text')->nullable();

        // Feature 1
        $table->string('feat1_image')->nullable();
        $table->json('feat1_label')->nullable();
        $table->json('feat1_title')->nullable();
        $table->json('feat1_text')->nullable();

        // Feature 2
        $table->string('feat2_image')->nullable();
        $table->json('feat2_label')->nullable();
        $table->json('feat2_title')->nullable();
        $table->json('feat2_text')->nullable();

        // Feature 3
        $table->string('feat3_image')->nullable();
        $table->json('feat3_label')->nullable();
        $table->json('feat3_title')->nullable();
        $table->json('feat3_text')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_settings');
    }
};
