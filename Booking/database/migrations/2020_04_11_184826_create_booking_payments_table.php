<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_payments', function (Blueprint $table) {
            $table->id();

            $table->double('paymentAmount');
            $table->dateTime('dateTime');
            $table->string('lastFour');
            $table->string('trnsitionNotes');
            $table->integer('bookingID')->unsigned();
            $table->foreign('bookingID')->references('id')->on('booking_infos');
            $table->integer('cardID')->unsigned();
            $table->foreign('cardID')->references('id')->on('card_infos');
            $table->integer('paymentMethodID')->unsigned();
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
        Schema::dropIfExists('booking_payments');
    }
}
