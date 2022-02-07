<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailabilityUnivercityCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availability_univercity_course', function (Blueprint $table) {
            $table->unsignedBigInteger('univercity_course_id');
            $table->foreign('univercity_course_id', 'univercity_course_id_fk_5753341')->references('id')->on('univercity_courses')->onDelete('cascade');
            $table->unsignedBigInteger('availability_id');
            $table->foreign('availability_id', 'availability_id_fk_5753341')->references('id')->on('availabilities')->onDelete('cascade');
        });
    }

  
}
