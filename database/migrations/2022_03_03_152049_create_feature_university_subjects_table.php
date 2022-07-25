<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureUniversitySubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_university_subject', function (Blueprint $table) {
            $table->unsignedBigInteger('university_subject_id');
            $table->foreign('university_subject_id')->references('id')->on('university_subjects')->onDelete('cascade');
            $table->unsignedBigInteger('feature_id');
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
        
        });
    }

}
