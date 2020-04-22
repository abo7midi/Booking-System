<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->integer('phoneTypeID')->unsigned();
            $table->foreign('phoneTypeID')->references('id')->on('phone_types');
            $table->integer('phoneExtentionID')->unsigned();
            $table->foreign('phoneExtentionID')->references('id')->on('phone_extentions');
            $table->integer('contactID')->unsigned();
            $table->foreign('contactID')->references('id')->on('contacts');
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
        Schema::dropIfExists('phones');
    }
}
