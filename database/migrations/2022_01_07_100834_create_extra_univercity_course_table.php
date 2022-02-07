<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraUnivercityCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_univercity_course', function (Blueprint $table) {
            $table->unsignedBigInteger('univercity_course_id');
            $table->foreign('univercity_course_id', 'univercity_course_id_fk_5753342')->references('id')->on('univercity_courses')->onDelete('cascade');
            $table->unsignedBigInteger('extra_id');
            $table->foreign('extra_id', 'extra_id_fk_5753342')->references('id')->on('extras')->onDelete('cascade');
        });
    }
}
