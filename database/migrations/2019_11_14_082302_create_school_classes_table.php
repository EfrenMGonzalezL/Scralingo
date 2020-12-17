<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('class_id')->unique();
            $table->string('class_name');
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('schedule_id');
            $table->string('class_color');
            $table->timestamps();

            $table->foreign('teacher_id')
                ->references('id')
                ->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_classes');
    }
}
