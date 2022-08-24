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
        Schema::create('tipo_tuberia', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_tuberia');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('tipo_material', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_material');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('tuberias', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('diametro');
            $table->string('norma');
            $table->string('grado');
            $table->unsignedDecimal('espesor');
            $table->unsignedDecimal('longitud');
            $table->unsignedDecimal('sdr');
            $table->unsignedDecimal('pn');
            $table->unsignedDecimal('rde');
            $table->unsignedBigInteger('id_tipo_tuberia');
            $table->unsignedBigInteger('id_tipo_material');
            $table->unsignedBigInteger('id_estacion_bombeo');
            $table->unsignedBigInteger('id_fabricante');
            $table->unsignedBigInteger('id_manifold');
            $table->tinyInteger('operatividad');
            $table->tinyInteger('en_uso');

            $table->foreign('id_estacion_bombeo')->references('id')->on('estacion_bombeo');
            $table->foreign('id_fabricante')->references('id')->on('fabricante');
            $table->foreign('id_manifold')->references('id')->on('manifold');
            $table->foreign('id_tipo_tuberia')->references('id')->on('tipo_tuberia');
            $table->foreign('id_tipo_material')->references('id')->on('tipo_material');
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
        Schema::dropIfExists('tipo_tuberia');
        Schema::dropIfExists('tipo_material');
        Schema::dropIfExists('tuberias');
    }
};
