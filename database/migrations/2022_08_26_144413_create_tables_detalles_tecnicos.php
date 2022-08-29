<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *ACA VAN A SER INCLUIDOS TODAS LAS TABLAS DE MEDICION DE LAS INFRAESTRUCTURA
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_tecnicos_plantas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_medicion');
            $table->integer('caudal_entrada');
            $table->integer('caudal_salida');
            $table->integer('turbiedad_entrada');
            $table->integer('turbiedad_salida');
            $table->integer('color_entrada');
            $table->integer('color_salida');
            $table->integer('descarga_max');
            $table->integer('cloro_residual');
            $table->integer('cloro_consumido');
            $table->integer('sulfato_aluminio_solido');
            $table->integer('sulfato_aluminio_liquido');
            $table->unsignedBigInteger('id_planta');

            $table->foreign('id_planta')->references('id')->on('plantas');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('detalles_consumo_plantas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_medicion');
            $table->float('cloro_consumido');
            $table->float('sulfato_aluminio_solido');
            $table->float('sulfato_aluminio_liquido');
            $table->unsignedBigInteger('id_planta');

            $table->foreign('id_planta')->references('id')->on('plantas');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('detalles_tecnicos_dique_toma', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_medicion');
            $table->float('caudal');
            $table->string('observacion');
            $table->unsignedBigInteger('id_dique_toma');

            $table->foreign('id_dique_toma')->references('id')->on('dique_tomas');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_tecnicos_plantas');
        Schema::dropIfExists('detalles_consumo_plantas');
    }
};
