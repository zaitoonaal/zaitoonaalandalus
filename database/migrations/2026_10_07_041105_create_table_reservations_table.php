<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('table_reservations', function (Blueprint $table) {
            $table->id();

            $table->string('name', 120);
            $table->string('phone', 50);

            $table->date('reservation_date');
            $table->time('reservation_time');

            $table->string('guests', 20);

            $table->string('seating', 50)
                ->default('no-preference');

            $table->text('message')
                ->nullable();

            $table->string('language', 2)
                ->default('en');

            $table->string('status', 30)
                ->default('pending');

            $table->timestamp('email_sent_at')
                ->nullable();

            $table->string('ip_address', 45)
                ->nullable();

            $table->text('user_agent')
                ->nullable();

            $table->timestamps();

            $table->index([
                'reservation_date',
                'reservation_time',
            ]);

            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('table_reservations');
    }
};