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
        Schema::create('dique_tomas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reg');
            $table->string('nombre')->comment('nombre dique');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_parroquia');
            $table->unsignedBigInteger('id_municipio');
            $table->string('desc_ubicacion')->comment('referencia sector');
            $table->unsignedBigInteger('id_coordenadas')->comment('coordenadas');
            $table->foreign('id_coordenadas')->references('id')->on('ubicacion_geografica');
            $table->unsignedBigInteger('id_acueducto');
            $table->string('toma_rio');
            $table->unsignedDecimal('caudal_diseno');
            $table->unsignedDecimal('caudal_recibe');
            $table->integer('status');
            $table->foreign('id_acueducto')->references('id')->on('acueductos');
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
        Schema::dropIfExists('dique_tomas');
    }
};
