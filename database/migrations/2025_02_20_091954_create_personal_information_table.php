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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string("first_name",30);
            $table->string("middle_name",30);
            $table->string("last_name",30);
            $table->string("phone");
            $table->string("location_address",30);
            $table->timestamps();
        });

    DB::table('personal_information')->insert([
        [
        
            "first_name" => "kimberly",
            "middle_name" => "moldez",
            "last_name" => "lagat", 
            "phone" => "09658826283",
            "location_address" => "taboc",
        ],
        [
            
           
        ]
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};