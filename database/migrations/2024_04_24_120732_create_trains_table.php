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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->unsignedSmallInteger('train_code');
            $table->unsignedSmallInteger('coaches');
            $table->boolean('on_schedule');
            $table->boolean('deleted');
            $table->timestamps();

            // "id" => 1
            // "company" => "Trenord"
            // "departure_station" => "Como"
            // "arrival_station" => "Milano Centrale"
            // "departure_time" => "09:40:00"
            // "arrival_time" => "10:30:00"
            // "train_code" => 56798
            // "coaches" => 12
            // "on_schedule" => 1
            // "deleted" => 0
            // "created_at" => "2024-04-25 00:00:00"
            // "updated_at" => "2024-04-25 00:00:00"
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
