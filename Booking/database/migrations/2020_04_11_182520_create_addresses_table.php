<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->string('customerLine1');
            $table->string('customerLine2');
            $table->string('customerLine3');
            $table->string('postCode');
            $table->unsignedBigInteger('cityID')->unsigned();
            $table->foreign('cityID')->references('id')->on('cities');
            $table->unsignedBigInteger('countryID')->unsigned();
            $table->foreign('countryID')->references('id')->on('countries');

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
        Schema::dropIfExists('addresses');
    }
}
