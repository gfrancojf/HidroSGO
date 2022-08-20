<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantasIngresoSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas_ingreso_sistemas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('planta');
            $table->integer('sistema');
            $table->integer('fuente');
            $table->integer('porcentaje');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plantas_ingreso_sistemas');
    }
}
