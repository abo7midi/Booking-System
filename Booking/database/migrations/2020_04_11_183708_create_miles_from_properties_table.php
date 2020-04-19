<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilesFromPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miles_from_properties', function (Blueprint $table) {
            $table->id();
            $table->string('milesFromProperty');
            $table->integer('propertyID')->unsigned();
            $table->foreign('propertyID')->references('id')->on('properties');
            $table->integer('landMarkID')->unsigned();
            $table->foreign('landMarkID')->references('id')->on('land_marks');
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
        Schema::dropIfExists('miles_from_properties');
    }
}
