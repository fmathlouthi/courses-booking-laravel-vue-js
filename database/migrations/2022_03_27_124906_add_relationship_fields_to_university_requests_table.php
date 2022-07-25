<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUniversityRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('university_requests', function (Blueprint $table) {
            $table->unsignedBigInteger('university_id')->nullable();
            $table->foreign('university_id')->references('id')->on('university_subjects');
            
        });
    }
}
