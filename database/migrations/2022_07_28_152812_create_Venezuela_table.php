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
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->string('estado')->comment('nombre del estado');
            $table->string('iso_3166-2');
            $table->timestamps();
        });
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estado_id');
            $table->string('municipio')->comment('nombre del municipio');
            $table->foreign('estado_id')->references('id')->on('estados');
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
            $table->unsignedBigInteger('estado_id');
            $table->string('ciudad')->comment('nombre del ciudad');
            $table->tinyInteger('capital');
            $table->foreign('estado_id')->references('id')->on('estados');
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
        Schema::dropIfExists('estados');
        Schema::dropIfExists('municipios');
        Schema::dropIfExists('parroquias');
        Schema::dropIfExists('ciudades');
        Schema::dropIfExists('sectores');
    }
};
