<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureUnivercityCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_univercity_course', function (Blueprint $table) {
            $table->unsignedBigInteger('univercity_course_id');
            $table->foreign('univercity_course_id', 'univercity_course_id_fk_5753384')->references('id')->on('univercity_courses')->onDelete('cascade');
            $table->unsignedBigInteger('feature_id');
            $table->foreign('feature_id', 'feature_id_fk_5753384')->references('id')->on('features')->onDelete('cascade');
        });
    }
}
