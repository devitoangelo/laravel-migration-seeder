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
            $table->string('agency', 50)->nullable();
            $table->string('Departure_station', 100)->nullable();
            $table->string('Arrival_station', 100);
            $table->dateTime('Departure_time');
            $table->dateTime('Arrival_time');
            $table->string('Train_code', 100);
            $table->tinyInteger('Number_carriages',)->nullable();
            $table->boolean('in_time',)->nullable()->default(1);
            $table->boolean('Deleted',)->nullable()->default(0);
            $table->timestamps();
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
