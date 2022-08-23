<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuente', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg');
            $table->string('nombre');
            $table->integer('tipo');
            $table->integer('estado');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->longText('desc_ubicacion');
            $table->string('utm_a');
            $table->string('utm_b');
            $table->string('proposito');
            $table->string('foto');
            $table->string('propietario');
            $table->string('constructora');
            $table->string('cronologia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuente');
    }
}
