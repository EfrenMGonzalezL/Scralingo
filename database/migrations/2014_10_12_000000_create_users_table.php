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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('paternal_surname');
            $table->string('maternal_surname');
            $table->string('email')->unique();
            $table->enum('sex', array('M', 'F'));
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_img');
            $table->rememberToken();
            $table->timestamp('last_login')->nullable();
            $table->bigInteger('user_id');
            $table->enum('user_type', array('App\\\Teacher', 'App\\\Student'));
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
