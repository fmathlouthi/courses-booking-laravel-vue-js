<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePathwayRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pathway_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_first_name')->nullable();
            $table->string('student_last_name')->nullable();
            $table->string('gendre')->nullable();
            $table->string('nationality')->nullable();
            $table->string('level_of_study')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('post_code')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address_1');
            $table->string('address_2')->nullable();
            $table->string('special_needs')->nullable();
            $table->longText('comments')->nullable();
            $table->string('preferred_intake')->nullable();
            $table->string('university_college')->nullable();
            $table->string('secondary_school')->nullable();
            $table->string('english_proficiency')->nullable();
            $table->string('current_address')->nullable();
            $table->date('date_of_birth')->nullable();$table->unsignedBigInteger('university_degree_id')->nullable();
            $table->foreign('university_degree_id', 'university_degree_fk_6299751')->references('id')->on('pathways');
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->foreign('subject_id', 'subject_fk_6299757')->references('id')->on('subject_pathways');
            $table->unsignedBigInteger('university_id')->nullable();
            $table->foreign('university_id', 'university_fk_6299758')->references('id')->on('pathway_universities');
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->foreign('owner_id', 'owner_fk_6299762')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pathway_requests');
    }
}
