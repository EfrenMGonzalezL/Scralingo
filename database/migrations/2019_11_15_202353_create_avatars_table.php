<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id');
            $table->string('name');
            $table->string('image_url')->nullable();
            $table->string('hair_url');
            $table->string('skin_url');
            $table->string('face_url');
            $table->string('shirt_url');
            $table->string('sleeves_url');
            $table->string('hands_url');
            $table->string('pants_url');
            $table->string('shoes_url');
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
        Schema::dropIfExists('avatars');
    }
}
