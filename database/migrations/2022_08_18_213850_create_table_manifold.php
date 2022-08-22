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
        Schema::create('manifold', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('nombre del manifold');
            $table->unsignedBigInteger('id_tipo_manifold');
            $table->unsignedBigInteger('cant_bridas');
            $table->unsignedBigInteger('cant_monometro');
            $table->unsignedBigInteger('cant_valvulas');
            $table->unsignedBigInteger('cant_tuberias');
            $table->boolean('operatividad');
            $table->unsignedBigInteger('id_estacion_bombeo');
            $table->foreign('id_estacion_bombeo')->references('id')->on('estacion_bombeo');
            $table->foreign('id_tipo_manifold')->references('id')->on('tipo_manifold');
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
        Schema::dropIfExists('table_manifold');
    }
};
