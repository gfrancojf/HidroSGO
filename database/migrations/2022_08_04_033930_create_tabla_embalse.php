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
        Schema::create('embalses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reg')->comment('por descubrir');
            $table->string('nombre')->comment('nombre pozo profundo');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_parroquia');
            $table->string('desc_ubicacion')->comment('Por definir');
            $table->unsignedBigInteger('id_coordenadas')->comment('coordenadas');
            $table->foreign('id_coordenadas')->references('id')->on('ubicacion_geografica');
            $table->string('proposito')->comment('proposito de uso');
            $table->string('propietario')->comment('propietario');
            $table->string('constructora')->comment('constructora');
            $table->string('cronologia')->comment('cronologia');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_municipio')->references('id')->on('municipios');
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
        Schema::dropIfExists('embalses');
    }
};
