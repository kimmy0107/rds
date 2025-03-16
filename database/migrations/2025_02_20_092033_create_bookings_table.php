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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unSignedBigInteger("personal_ID");
            $table->unSignedBigInteger("service_id");
            $table->unSignedBigInteger("reservation_ID");
            $table->string("email",30);
            $table->date("booking_date");
            $table->string("time_slot",30);
            $table->enum("status",["pending","approved","declined","ongoing","in progress","done"]);
            $table->timestamps();


      $table->foreign("personal_ID")->references("id")->on("personal_information")->ondelete("cascade")->onupdate("cascade");
      $table->foreign("service_id")->references("id")->on("service_types")->ondelete("cascade")->onupdate("cascade");
      $table->foreign("reservation_ID")->references("id")->on("reservations_schedule")->ondelete("cascade")->onupdate("cascade");
          


        });

        DB::table('bookings')->insert([

            [
                "personal_ID" => 1,
                "service_id" => 3,
                "reservation_ID" => 1,
                "email" => "lagatkimberly@gmail.com",
                "booking_date" => "2025-03-04",
                "time_slot" => "8:30-17:00",
                "status" => "done",
            ]
            ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};