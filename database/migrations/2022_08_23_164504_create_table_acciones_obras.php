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
        Schema::create('tipo_ejecucion', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_ejecucion');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('tiempo_ejecucion', function (Blueprint $table) {
            $table->id();
            $table->string('tiempo_ejecucion')->comment('escribir los meses del 1 al 12 idk');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('acciones_obras', function (Blueprint $table) {
            $table->id();
            $table->string('desc_accion'); //Esto hay que definir bien que es
            $table->integer('impacto_poblacional');
            $table->integer('inversion');
            $table->string('materiales');
            $table->unsignedBigInteger('id_tiempo_ejecucion');
            $table->unsignedBigInteger('id_tipo_ejecucion');

            $table->foreign('id_tiempo_ejecucion')->references('id')->on('tiempo_ejecucion');
            $table->foreign('id_tipo_ejecucion')->references('id')->on('tipo_ejecucion');
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
        Schema::dropIfExists('tipo_ejecucion');
        Schema::dropIfExists('tiempo_ejecucion');
        Schema::dropIfExists('acciones_obras');
    }
};
