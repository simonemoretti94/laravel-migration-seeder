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

            //Azienda
            // Stazione di partenza
            // Stazione di arrivo
            // Orario di partenza
            // Orario di arrivo
            // Codice Treno
            // Numero Carrozze
            // In orario
            // Cancellato
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
