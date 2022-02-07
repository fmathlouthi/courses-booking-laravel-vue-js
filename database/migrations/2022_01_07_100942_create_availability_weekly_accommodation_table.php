<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailabilityWeeklyAccommodationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availability_weekly_accommodation', function (Blueprint $table) {
            $table->unsignedBigInteger('weekly_accommodation_id');
            $table->foreign('weekly_accommodation_id', 'weekly_accommodation_id_fk_5753494')->references('id')->on('weekly_accommodations')->onDelete('cascade');
            $table->unsignedBigInteger('availability_id');
            $table->foreign('availability_id', 'availability_id_fk_5753494')->references('id')->on('availabilities')->onDelete('cascade');
        });
    }
}
