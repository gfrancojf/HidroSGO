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
        Schema::create('detalles_tecnicos_estacion_bombeo', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('succion');
            $table->unsignedDecimal('descarga');
            $table->unsignedDecimal('amperaje');
            $table->unsignedDecimal('voltaje');
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
        Schema::dropIfExists('detalles_tecnicos_estacion_bombeo');
    }
};
