<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_infos', function (Blueprint $table) {
            $table->id();
            $table->date('dateBookedOn');
            $table->double('totalPrice');
            $table->integer('outstandingAmount');
            $table->integer('cancelled');
            $table->integer('agentID')->unsigned();
            $table->foreign('agentID')->references('id')->on('agents');
            $table->integer('customerID')->unsigned();
            $table->foreign('customerID')->references('id')->on('customers');
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
        Schema::dropIfExists('booking_infos');
    }
}
