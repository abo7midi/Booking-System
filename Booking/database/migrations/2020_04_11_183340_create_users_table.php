<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('oldPassword')->nullable();
                $table->integer('loginAttempt')->default('5');
                $table->integer('todayLoginAttempt')->default('0');
                $table->boolean('isLogin')->default(false);
                $table->unsignedBigInteger('typeID')->unsigned()->default(0);
                $table->foreign('typeID')->references('ID')->on('login_types');
                $table->unsignedBigInteger('customerID')->unsigned();
                $table->foreign('customerID')->references('ID')->on('Customers');
                $table->unsignedBigInteger('agentID')->unsigned();
                $table->foreign('agentID')->references('ID')->on('Agents');
                $table->unsignedBigInteger('propertyHostID')->unsigned();
                $table->foreign('propertyHostID')->references('ID')->on('property_hosts');
                $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
