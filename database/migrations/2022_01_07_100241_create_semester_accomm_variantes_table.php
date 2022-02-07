<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemesterAccommVariantesTable extends Migration
{
    public function up()
    {
        Schema::create('semester_accomm_variantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('starting_date');
            $table->decimal('price', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
