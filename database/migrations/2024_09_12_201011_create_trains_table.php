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
            $table->timestamps();
            $table->string('Company');
            $table->string('Departure_station');
            $table->string('Arrival_station');
            $table->tinyInteger('Departure_time');
            $table->time('Time_of_arrival', 0);
            $table->tinyInteger('Train_code');
            $table->tinyInteger('Carriage_number');
            $table->boolean('Timetable');
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
