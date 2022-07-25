<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturePathwayUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_pathway_university', function (Blueprint $table) {
            $table->unsignedBigInteger('pathway_university_id');
            $table->foreign('pathway_university_id')->references('id')->on('pathway_universities')->onDelete('cascade');
            $table->unsignedBigInteger('feature_id');
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
        });
    }
}
