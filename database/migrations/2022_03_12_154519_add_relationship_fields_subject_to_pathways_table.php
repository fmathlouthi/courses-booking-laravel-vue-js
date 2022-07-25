<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsSubjectToPathwaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pathways', function (Blueprint $table) {
            
            $table->unsignedBigInteger('subject_pathway_id')->nullable();
            $table->foreign('subject_pathway_id')->references('id')->on('subject_pathways');
        });
    }
}
