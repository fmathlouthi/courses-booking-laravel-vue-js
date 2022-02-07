<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSemesterAccommVariantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('semester_accomm_variantes', function (Blueprint $table) {
            $table->unsignedBigInteger('semester_accommodation_id')->nullable();
            $table->foreign('semester_accommodation_id', 'semester_accommodation_fk_5753514')->references('id')->on('semester_accommodations');
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->foreign('owner_id', 'owner_fk_5753518')->references('id')->on('users');
        });
    }
}
