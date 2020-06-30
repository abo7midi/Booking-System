<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_languages', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('propertyHostID')->unsigned();
            $table->foreign('propertyHostID')->references('id')->on('property_hosts');
            $table->unsignedBigInteger('languageID')->unsigned();
            $table->foreign('languageID')->references('id')->on('languages');

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
        Schema::dropIfExists('property_languages');
    }
}
