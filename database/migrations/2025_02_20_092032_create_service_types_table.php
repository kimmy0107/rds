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
        Schema::create('service_types', function (Blueprint $table) {
            $table->id();
            $table->string("service_name",30);
            $table->Integer("service_value");
            $table->timestamps();
        });

        DB::table('service_types')->insert([
            [
                "service_name" => 'CLEANING',
                "service_value" => 900,
            ],
            [
                "service_name" => 'REPAIRING',
                "service_value" => 850,
            ],
            [
                "service_name" => 'INSTALLING',
                "service_value" => 800,
            ]

            ]);
        

    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_types');
    }
};
