<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_infos', function (Blueprint $table) {
            $table->id();

            $table->string('firstNameOnCard');
            $table->string('lastNameOnCard');
            $table->string('cardNumber');
            $table->date('expireDate');
            $table->unsignedBigInteger('customerID')->unsigned();
            $table->foreign('customerID')->references('id')->on('customers');
            $table->unsignedBigInteger('cardTypeID')->unsigned();
            $table->foreign('cardTypeID')->references('id')->on('card_types');

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
        Schema::dropIfExists('card_infos');
    }
}
