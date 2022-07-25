<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodation_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_number')->unique();
            $table->decimal('sub_total', 15, 2);
            $table->decimal('total_amount', 15, 2)->nullable();
            $table->string('payment_method');
            $table->string('payment_status')->nullable();
            $table->string('status')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('post_code')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->date('start_date')->nullable();
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id')->references('id')->on('users');
            $table->unsignedBigInteger('accommodation_id')->nullable();
            $table->foreign('accommodation_id')->references('id')->on('semester_accommodations');
            $table->unsignedBigInteger('accommodationvariante_id')->nullable();
            $table->foreign('accommodationvariante_id')->references('id')->on('semester_accomm_variantes');
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->foreign('owner_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accommodation_orders');
    }
}
