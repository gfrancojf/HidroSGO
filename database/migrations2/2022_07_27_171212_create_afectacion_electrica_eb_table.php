<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfectacionElectricaEbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afectacion_electrica_eb', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('num_reg');
            $table->integer('eb');
            $table->date('fecha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afectacion_electrica_eb');
    }
}
