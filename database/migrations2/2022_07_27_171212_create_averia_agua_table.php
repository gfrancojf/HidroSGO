<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAveriaAguaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('averia_agua', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('num_reg');
            $table->integer('estado');
            $table->integer('acueducto');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->string('sector');
            $table->integer('tipo');
            $table->date('fecha_agregado');
            $table->date('fecha_estimada')->nullable();
            $table->string('control_ccs', 50);
            $table->string('cuadrilla', 50);
            $table->integer('personal');
            $table->integer('familias');
            $table->integer('horas_resuelve');
            $table->longText('describa_falla');
            $table->integer('atendido');
            $table->date('fecha_atencion')->nullable();
            $table->string('hora_atencion');
            $table->string('horas_durante');
            $table->longText('descripcion_hecho');
            $table->integer('efectivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('averia_agua');
    }
}
