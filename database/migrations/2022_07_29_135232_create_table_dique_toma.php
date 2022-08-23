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
            $table->unsignedBigInteger('estado');
            $table->unsignedBigInteger('parroquia');
            $table->unsignedBigInteger('municipio');
            $table->string('desc_ubicacion')->comment('referencia sector');
            $table->unsignedDecimal('utm_a', $precision=15);
            $table->unsignedDecimal('utm_b', $precision=15);
            $table->unsignedBigInteger('acueducto');
            $table->string('toma_rio');
            $table->unsignedDecimal('caudal_diseno');
            $table->unsignedDecimal('caudal_recibe');
            $table->integer('status');
            $table->foreign('acueducto')->references('id')->on('acueductos');
            $table->foreign('estado')->references('id')->on('estados');
            $table->foreign('municipio')->references('id')->on('municipios');
            $table->foreign('parroquia')->references('id')->on('parroquias');
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