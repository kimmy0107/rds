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
        Schema::create('reservations_schedule', function (Blueprint $table) {
            $table->id();
            $table->string("reserve_slot",20);
            $table->date("reserve_date");
            $table->time("start_time");
            $table->time("end_time");
            $table->timestamps();
        });

        DB::table('reservations_schedule')->insert([
            [
                "reserve_slot" => 3,
                "reserve_date" => "2025-03-05",
                "start_time" => "08:30",
                "end_time" => "17:00",
            ]
            ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations_schedule');
    }
};
