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
        Schema::create('tipo_estrategia', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_estrategia');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('acciones_planes', function (Blueprint $table) {
            $table->id();
            $table->string('accion');
            $table->unsignedBigInteger('id_estrategia');
            $table->foreign('id_estrategia')->references('id')->on('tipo_estrategia');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('datos_planes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_linea_estrategia');
            $table->unsignedBigInteger('id_accion');
            $table->string('actividad');
            $table->string('actividad_precedente');
            $table->date('fecha_origen');
            $table->date('fecha_entrega');
            $table->string('responsable');
            $table->string('co_responsable');
            $table->string('resultados_esperados');

            $table->foreign('id_linea_estrategia')->references('id')->on('tipo_estrategia');
            $table->foreign('id_accion')->references('id')->on('acciones_planes');
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
        Schema::dropIfExists('tipo_estrategia');
        Schema::dropIfExists('acciones_planes');
        Schema::dropIfExists('datos_planes');
    }
};
