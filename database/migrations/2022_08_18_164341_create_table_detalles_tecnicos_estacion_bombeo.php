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
            $table->unsignedDecimal('succion_min');
            $table->unsignedDecimal('succion_max');
            $table->unsignedDecimal('descarga_min');
            $table->unsignedDecimal('descarga_max');
            $table->unsignedDecimal('amp_min');
            $table->unsignedDecimal('amp_max');
            $table->unsignedDecimal('voltaje_min');
            $table->unsignedDecimal('voltaje_max');
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
