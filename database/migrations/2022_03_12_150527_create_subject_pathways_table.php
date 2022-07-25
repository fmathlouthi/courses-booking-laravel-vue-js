<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectPathwaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_pathways', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('status');
                $table->timestamps();
                $table->softDeletes();
            
        });
    }
}
