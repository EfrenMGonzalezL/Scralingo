<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarAccesoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatar_accesories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('accesory_id')->unsigned();
            $table->bigInteger('avatar_id')->unsigned();
            $table->timestamps();

            $table->foreign('accesory_id')
                ->references('id')
                ->on('accesories');

            $table->foreign('avatar_id')
                ->references('id')
                ->on('avatars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avatar_accesories');
    }
}
