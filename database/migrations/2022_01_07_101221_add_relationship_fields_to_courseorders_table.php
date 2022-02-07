<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCourseordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_orders', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id', 'client_fk_5740523')->references('id')->on('users');
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->foreign('coupon_id', 'coupon_fk_5740525')->references('id')->on('coupons');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id', 'course_fk_5740559')->references('id')->on('weekly_courses');
            $table->unsignedBigInteger('extra_id')->nullable();
            $table->foreign('extra_id', 'extra_fk_5740560')->references('id')->on('extras');
            $table->unsignedBigInteger('accommodation_id')->nullable();
            $table->foreign('accommodation_id', 'accommodation_fk_5740561')->references('id')->on('accommodations');
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->foreign('owner_id', 'owner_fk_5740541')->references('id')->on('users');
        });
    }
}
