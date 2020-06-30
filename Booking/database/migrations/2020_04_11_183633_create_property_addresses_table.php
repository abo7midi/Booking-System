<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_addresses', function (Blueprint $table) {
            $table->id();

            $table->string('latitude');
            $table->string('longitude');
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('postCode');
            $table->unsignedBigInteger('cityID')->unsigned();
            $table->foreign('cityID')->references('id')->on('cities');
            $table->unsignedBigInteger('countryID')->unsigned();
            $table->foreign('countryID')->references('id')->on('countries');
            $table->unsignedBigInteger('areaID')->unsigned();
            $table->foreign('areaID')->references('id')->on('areas');

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
        Schema::dropIfExists('property_addresses');
    }
}
