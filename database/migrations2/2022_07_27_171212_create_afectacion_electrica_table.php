<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfectacionElectricaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afectacion_electrica', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('num_reg');
            $table->integer('control');
            $table->integer('id_eb');
            $table->integer('estado');
            $table->integer('municipio');
            $table->integer('sistema_2');
            $table->date('dia');
            $table->date('dia2')->nullable();
            $table->string('hora_ini');
            $table->string('hora_fin');
            $table->string('h_ss', 50);
            $table->integer('proceso');
            $table->integer('sub_proceso');
            $table->integer('equipo');
            $table->longText('descripcion');
            $table->integer('s_asociado_2');
            $table->integer('status');
            $table->integer('op_apertura');
            $table->integer('op_cierre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('afectacion_electrica');
    }
}
