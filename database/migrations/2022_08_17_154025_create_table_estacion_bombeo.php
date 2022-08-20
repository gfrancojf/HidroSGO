<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estacion_bombeo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('nombre estacion de bombeo');
            $table->unsignedBigInteger('cantidad_grupos');
            $table->unsignedBigInteger('id_tipo_estacion_bombeo');
            $table->unsignedBigInteger('id_tipo_servicio');
            $table->unsignedBigInteger('id_sistema');
            $table->unsignedBigInteger('id_acueducto');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_parroquia');
            $table->unsignedBigInteger('id_coordenadas')->comment('coordenadas');
            $table->foreign('id_sistema')->references('id')->on('sistemas');
            $table->foreign('id_acueducto')->references('id')->on('acueductos');
            $table->foreign('id_tipo_estacion_bombeo')->references('id')->on('tipo_estacion_bombeo');
            $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio_estacion_bombeo');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->foreign('id_parroquia')->references('id')->on('parroquias');
            $table->foreign('id_coordenadas')->references('id')->on('ubicacion_geografica');
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
        Schema::dropIfExists('estacion_bombeo');
    }
};
