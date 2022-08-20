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
        Schema::create('plantas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('nombre planta');
            $table->unsignedDecimal('caudal_diseño');
            $table->unsignedBigInteger('id_tipo_planta');
            $table->unsignedBigInteger('id_sistema');
            $table->unsignedBigInteger('id_acueducto');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_parroquia');
            $table->unsignedBigInteger('id_coordenadas')->comment('coordenadas');
            $table->foreign('id_tipo_planta')->references('id')->on('tipo_planta');
            $table->foreign('id_sistema')->references('id')->on('sistemas');
            $table->foreign('id_acueducto')->references('id')->on('acueductos');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->foreign('id_parroquia')->references('id')->on('parroquias');
            $table->foreign('id_coordenadas')->references('id')->on('ubicacion_geografica');
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
        Schema::dropIfExists('plantas');
    }
};
