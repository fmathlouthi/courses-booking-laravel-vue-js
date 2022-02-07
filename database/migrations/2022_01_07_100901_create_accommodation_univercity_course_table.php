<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationUnivercityCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodation_univercity_course', function (Blueprint $table) {
            $table->unsignedBigInteger('univercity_course_id');
            $table->foreign('univercity_course_id', 'univercity_course_id_fk_5753343')->references('id')->on('univercity_courses')->onDelete('cascade');
            $table->unsignedBigInteger('accommodation_id');
            $table->foreign('accommodation_id', 'accommodation_id_fk_5753343')->references('id')->on('accommodations')->onDelete('cascade');
        });
    }
}
