<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_reviews', function (Blueprint $table) {
            $table->id();

            $table->string('description');
            $table->unsignedBigInteger('propertyID')->unsigned();
            $table->foreign('propertyID')->references('id')->on('properties');
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
        Schema::dropIfExists('property_reviews');
    }
}
