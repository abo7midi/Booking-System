<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_room_types', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('propertyID')->unsigned();
            $table->foreign('propertyID')->references('id')->on('properties');
            $table->unsignedBigInteger('roomTypeID')->unsigned();
            $table->foreign('roomTypeID')->references('id')->on('room_types');

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
        Schema::dropIfExists('property_room_types');
    }
}
