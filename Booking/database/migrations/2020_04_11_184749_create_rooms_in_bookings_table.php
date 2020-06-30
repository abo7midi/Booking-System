<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsInBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms_in_bookings', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('roomAvailableID')->unsigned();
            $table->foreign('roomAvailableID')->references('id')->on('room_availables');
            $table->unsignedBigInteger('bookingID')->unsigned();
            $table->foreign('bookingID')->references('id')->on('booking_infos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms_in_bookings');
    }
}
