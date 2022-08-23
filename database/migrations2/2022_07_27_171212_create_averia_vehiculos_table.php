<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAveriaVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('averia_vehiculos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_averia');
            $table->bigInteger('num_reg');
            $table->date('fecha');
            $table->integer('tipo');
            $table->integer('gerencia');
            $table->longText('describa');
            $table->integer('estatus');
            $table->string('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('averia_vehiculos');
    }
}
