<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWeeknumberAndBookfeeeFieldsToSemesterAccommVariantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('semester_accomm_variantes', function (Blueprint $table) {
            $table->integer('weeksnumber');
            $table->decimal('bookfee', 15, 2);
        });
    }

}
