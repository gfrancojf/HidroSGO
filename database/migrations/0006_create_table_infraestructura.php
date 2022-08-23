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
        Schema::create('infraestructura', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('infraestructura');
            $table->string('propietario')->comment('propietario');
            $table->string('constructura')->comment('constructura');
            $table->string('proposito')->comment('proposito');
            $table->string('img');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_parroquia');
            $table->unsignedBigInteger('id_coordenadas');
            $table->unsignedBigInteger('id_sector');
            $table->string('desc_ubicacion');
            $table->unsignedBigInteger('poblacion_servida');
            $table->unsignedBigInteger('id_tipo_infraestructura');
            $table->unsignedBigInteger('id_sistema');
            $table->unsignedBigInteger('id_acueducto');
            $table->foreign('id_sistema')->references('id')->on('sistemas');
            $table->foreign('id_acueducto')->references('id')->on('acueductos');
            $table->foreign('id_tipo_infraestructura')->references('id')->on('tipo_infraestructura');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->foreign('id_parroquia')->references('id')->on('parroquias');
            $table->foreign('id_coordenadas')->references('id')->on('ubicacion_geografica');
            $table->foreign('id_sector')->references('id')->on('sectores');
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
        Schema::dropIfExists('infraestructura');
    }
};
