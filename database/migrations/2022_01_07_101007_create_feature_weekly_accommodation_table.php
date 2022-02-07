<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureWeeklyAccommodationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_weekly_accommodation', function (Blueprint $table) {
            $table->unsignedBigInteger('weekly_accommodation_id');
            $table->foreign('weekly_accommodation_id', 'weekly_accommodation_id_fk_5753495')->references('id')->on('weekly_accommodations')->onDelete('cascade');
            $table->unsignedBigInteger('feature_id');
            $table->foreign('feature_id', 'feature_id_fk_5753495')->references('id')->on('features')->onDelete('cascade');
        });
    }
}
