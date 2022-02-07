<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureSemesterAccommodationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_semester_accommodation', function (Blueprint $table) {
            $table->unsignedBigInteger('semester_accommodation_id');
            $table->foreign('semester_accommodation_id', 'semester_accommodation_id_fk_5753506')->references('id')->on('semester_accommodations')->onDelete('cascade');
            $table->unsignedBigInteger('feature_id');
            $table->foreign('feature_id', 'feature_id_fk_5753506')->references('id')->on('features')->onDelete('cascade');
        });
    }
}
