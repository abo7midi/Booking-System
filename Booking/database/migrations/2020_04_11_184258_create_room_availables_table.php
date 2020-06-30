<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomAvailablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_availables', function (Blueprint $table) {
            $table->id();
            $table->integer('maxRoomAvailable');
            $table->double('roomPrice');
            $table->date('date');
            $table->unsignedBigInteger('propertyRoomID')->unsigned();
            $table->foreign('propertyRoomID')->references('id')->on('property_room_types');
            $table->unsignedBigInteger('paymentMethodID')->unsigned();
            $table->foreign('paymentMethodID')->references('id')->on('payment_methods');

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
        Schema::dropIfExists('room_availables');
    }
}
