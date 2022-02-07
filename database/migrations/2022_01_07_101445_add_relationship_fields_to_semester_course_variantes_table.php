<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSemesterCourseVariantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('semester_course_variantes', function (Blueprint $table) {
            $table->unsignedBigInteger('semester_course_id')->nullable();
            $table->foreign('semester_course_id', 'semester_course_fk_5753479')->references('id')->on('semester_courses');
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->foreign('owner_id', 'owner_fk_5753483')->references('id')->on('users');
        });

    }
}
