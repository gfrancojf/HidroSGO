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
     $table->unsignedDecimal('succion_max');
     $table->unsignedDecimal('succion_min');
     $table->unsignedDecimal('descarga_max');
     $table->unsignedDecimal('descarga_min');
     $table->unsignedDecimal('amperaje_max');
     $table->unsignedDecimal('amperaje_min');
     $table->unsignedDecimal('voltaje_max');
     $table->unsignedDecimal('voltaje_min');
     $table->unsignedBigInteger('id_tipo_estacion_bombeo');
     $table->unsignedBigInteger('id_tipo_servicio');
     $table->unsignedBigInteger('id_infraestructura');
     $table->foreign('id_infraestructura')->references('id')->on('infraestructura');
     $table->foreign('id_tipo_estacion_bombeo')->references('id')->on('tipo_estacion_bombeo');
     $table->foreign('id_tipo_servicio')->references('id')->on('tipo_servicio_estacion_bombeo');
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