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
        Schema::create('hidrologicas', function (Blueprint $table) {
            $table->id();
            $table->string('hidrologica')->comment('nombre hidrologica');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->comment('nombre del estado');
            $table->string('iso_3166-2');
            $table->timestamps();
        });
        Schema::create('hidrologicas_estados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->unsignedBigInteger('id_hidrologica');
            $table->foreign('id_hidrologica')->references('id')->on('hidrologicas');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estado');
            $table->string('municipio')->comment('nombre del municipio');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->timestamps();
        });
        Schema::create('parroquias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('municipio_id');
            $table->string('parroquia')->comment('nombre de la parroquia');
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->timestamps();
        });

        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estado');
            $table->string('ciudad')->comment('nombre del ciudad');
            $table->tinyInteger('capital');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->timestamps();
        });
        Schema::create('sectores', function (Blueprint $table) {
            $table->id();
            $table->string('sector');
            $table->unsignedBigInteger('id_parroquia');
            $table->foreign('id_parroquia')->references('id')->on('parroquias');
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
        Schema::dropIfExists('hidrologicas');
        Schema::dropIfExists('estados');
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('parroquias');
        Schema::dropIfExists('ciudades');
        Schema::dropIfExists('sectores');
    }
};
