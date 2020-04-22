<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingCommissionInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_commission_invoices', function (Blueprint $table) {
            $table->id();

            $table->double('totalIncome');
            $table->double('commissionOfIncome');
            $table->integer('propertyHostID')->unsigned();
            $table->foreign('propertyHostID')->references('id')->on('property_hosts');
            $table->integer('bookingID')->unsigned();
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
        Schema::dropIfExists('booking_commission_invoices');
    }
}
