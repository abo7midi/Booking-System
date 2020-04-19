<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyRoomFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_room_facilities', function (Blueprint $table) {
            $table->id();
            $table->integer('facilityID')->unsigned();
            $table->foreign('facilityID')->references('id')->on('facilities_types');
            $table->integer('propertyRoomID')->unsigned();
            $table->foreign('propertyRoomID')->references('id')->on('property_room_types');
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
        Schema::dropIfExists('property_room_facilities');
    }
}
