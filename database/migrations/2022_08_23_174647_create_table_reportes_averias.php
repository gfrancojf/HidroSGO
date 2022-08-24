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
        Schema::create('tipo_reportes_averias', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_reporte');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('reportes_averias', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->unsignedBigInteger('id_tipo_reporte');
            $table->unsignedBigInteger('id_acueducto');
            $table->string('nombre_cliente_reporta');
            $table->integer('telefono');
            $table->tinyInteger('1x10');
            $table->string('direccion');
            $table->integer('numero_servicio');
            $table->string('descripcion_averia');
            $table->unsignedBigInteger('id_coordenadas');

            $table->foreign('id_coordenadas')->references('id')->on('ubicacion_geografica');
            $table->foreign('id_tipo_reporte')->references('id')->on('tipo_reportes_averias');
            $table->foreign('id_acueducto')->references('id')->on('acueductos');
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
        Schema::dropIfExists('tipo_reportes_averias');
        Schema::dropIfExists('reportes_averias');
    }
};
