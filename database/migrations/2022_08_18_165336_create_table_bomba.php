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
        Schema::create('bombas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo');
            $table->unsignedBigInteger('nro_etapas');
            $table->string('rotacion')->comment('rotacion');
            $table->unsignedDecimal('caudal');
            $table->unsignedDecimal('presion');
            $table->unsignedDecimal('rpm');
            $table->unsignedDecimal('peso');
            $table->unsignedDecimal('diametro_succion');
            $table->unsignedDecimal('diametro_descarga');
            $table->string('tipo_sello')->comment('tipo de sello');
            $table->tinyInteger('operatividad');
            $table->unsignedBigInteger('id_estacion_bombeo');
            $table->unsignedBigInteger('id_fabricante');
            $table->foreign('id_estacion_bombeo')->references('id')->on('estacion_bombeo');
            $table->foreign('id_fabricante')->references('id')->on('fabricante');
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
        Schema::dropIfExists('bombas');
    }
};
