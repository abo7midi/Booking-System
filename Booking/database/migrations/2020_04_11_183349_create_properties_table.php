<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('propertyName');
            $table->integer('starRatingID')->unsigned();
            $table->foreign('starRatingID')->references('id')->on('official_star_ratings');
            $table->integer('propertyHostID')->unsigned();
            $table->foreign('propertyHostID')->references('id')->on('property_hosts');
            $table->integer('propertyAddressID')->unsigned();
            $table->foreign('propertyAddressID')->references('id')->on('property_addresses');
            $table->integer('propertyTypeID')->unsigned();
            $table->foreign('propertyTypeID')->references('id')->on('property_Types');
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
        Schema::dropIfExists('properties');
    }
}
