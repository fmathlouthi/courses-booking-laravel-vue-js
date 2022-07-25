<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('university_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_first_name');
            $table->string('student_last_name')->nullable();
            $table->string('gendre')->nullable();
            $table->string('nationality')->nullable();
            $table->string('level_of_study');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('post_code')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('special_needs')->nullable();
            $table->string('comments')->nullable();
            $table->string('preferred_intake')->nullable();
            $table->string('university_degree')->nullable();
            $table->string('university_college')->nullable();
            $table->string('secondary_school')->nullable();
            $table->string('english_proficiency')->nullable();
            $table->string('current_address')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
