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
                $table->string('email', 250)->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('oldPassword')->nullable();
                $table->integer('loginAttempt');
                $table->integer('todayLoginAttempt');
                $table->boolean('isLogin');
                $table->unsignedBigInteger('typeID');
                $table->foreign('typeID')->references('id')->on('login_types');
                $table->integer('customerID')->unsigned();
                $table->foreign('customerID')->references('ID')->on('Customer');
                $table->integer('agentID')->unsigned();
                $table->foreign('agentID')->references('ID')->on('Agent');
                $table->integer('propertyHostID')->unsigned();
                $table->foreign('propertyHostID')->references('ID')->on('PropertyHost');
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
