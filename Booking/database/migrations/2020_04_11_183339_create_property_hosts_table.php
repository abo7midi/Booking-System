<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_hosts', function (Blueprint $table) {
            $table->id();
            $table->double('proposedCommission');
            $table->string('Bio');
            $table->string('propertyHostDisplayName1');
            $table->string('propertyHostDisplayName2');
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
        Schema::dropIfExists('property_hosts');
    }
}
