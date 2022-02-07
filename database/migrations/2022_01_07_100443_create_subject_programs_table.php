<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('subject_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('entry_requirements');
            $table->date('months_of_entry');
            $table->longText('course_content')->nullable();
            $table->decimal('fees_and_funding', 15, 2);
            $table->longText('qualification_and_course_duration')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
