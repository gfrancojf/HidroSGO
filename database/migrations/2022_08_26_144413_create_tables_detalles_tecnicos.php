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
        Schema::create('detalles_tecnicos_embalse', function (Blueprint $table) {
            $table->id();
            $table->float('cota');
            $table->float('extraccion');
            $table->float('observacion');
            $table->date('fecha_medicion');
            $table->unsignedBigInteger('id_embalse');

            $table->foreign('id_embalse')->references('id')->on('embalses');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('detalles_tecnicos_pozos_profundos', function (Blueprint $table) {
            $table->id();
            $table->float('extraccion');
            $table->float('observacion');
            $table->date('fecha_medicion');
            $table->unsignedBigInteger('id_pozo_profundo');

            $table->foreign('id_pozo_profundo')->references('id')->on('pozo_profundos');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('detalles_grupos_estacion_bombeo', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('succion_max');
            $table->unsignedDecimal('succion');
            $table->unsignedDecimal('succion_min');
            $table->unsignedDecimal('descarga_max');
            $table->unsignedDecimal('descarga');
            $table->unsignedDecimal('descarga_min');
            $table->unsignedDecimal('amperaje_max');
            $table->unsignedDecimal('amperaje');
            $table->unsignedDecimal('amperaje_min');
            $table->unsignedDecimal('voltaje_max');
            $table->unsignedDecimal('voltaje');
            $table->unsignedDecimal('voltaje_min');
            $table->unsignedDecimal('grupo');
            $table->string('observaciones');
            $table->date('fecha_medicion');
            
            $table->unsignedBigInteger('id_estacion_bombeo');
            $table->foreign('id_estacion_bombeo')->references('id')->on('estacion_bombeo');
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
        Schema::dropIfExists('detalles_tecnicos_dique_toma');
        Schema::dropIfExists('detalles_tecnicos_embalse');
        Schema::dropIfExists('detalles_tecnicos_pozos_profundos');
        Schema::dropIfExists('detalles_grupos_estacion_bombeo');
    }
};
