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
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_parroquia');
            $table->unsignedBigInteger('id_sector');
            $table->unsignedBigInteger('id_acueducto');
            $table->string('nombre_cliente_reporta');
            $table->integer('telefono');
            $table->tinyInteger('1x10');
            $table->string('direccion');
            $table->integer('numero_servicio');
            $table->string('descripcion_averia');

            $table->foreign('id_tipo_reporte')->references('id')->on('tipo_reportes_averia');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->foreign('id_parroquia')->references('id')->on('parroquias');
            $table->foreign('id_sector')->references('id')->on('sectores');
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
        Schema::dropIfExists('reportes_averias');
    }
};
