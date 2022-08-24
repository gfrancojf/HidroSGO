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
        Schema::create('tipo_organizaciones_populares', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_organizacion_popular');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('organizaciones_populares', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_organizacion');
            $table->unsignedBigInteger('id_tipo_organizacion_popular');
            $table->unsignedBigInteger('id_coordenadas');
            $table->unsignedBigInteger('id_acueducto');
            $table->integer('cant_miembros');
            $table->date('fecha_creacion');

            $table->foreign('id_coordenadas')->references('id')->on('ubicacion_geografica');
            $table->foreign('id_tipo_organizacion_popular')->references('id')->on('tipo_organizaciones_populares');
            $table->foreign('id_acueducto')->references('id')->on('acueductos');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('tipo_funciones', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_funcion');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('miembros_organizacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('cedula');
            $table->integer('telefono');
            $table->string('rif');
            $table->unsignedBigInteger('id_organizacion_popular');
            $table->unsignedBigInteger('id_tipo_funcion')->comment('que funcion cumple en la organizacion');
            $table->date('fecha_ingreso');

            $table->foreign('id_tipo_funcion')->references('id')->on('tipo_funciones');
            $table->foreign('id_organizacion_popular')->references('id')->on('organizaciones_populares');
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
        Schema::dropIfExists('tipo_organizaciones_populares');
        Schema::dropIfExists('organizaciones_populares');
        Schema::dropIfExists('tipo_funciones');
        Schema::dropIfExists('miembros_organizacion');
    }
};
