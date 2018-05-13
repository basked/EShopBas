<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('link');
            $table->text('description');
            $table->string('addition');
            $table->dateTime('duration');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('course_categories');
            $table->unsignedInteger('sourse_id');
            $table->foreign('sourse_id')->references('id')->on('course_sources');
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('course_courses');
    }
}
