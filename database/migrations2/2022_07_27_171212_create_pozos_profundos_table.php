<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePozosProfundosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pozos_profundos', function (Blueprint $table) {
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
            $table->decimal('diametro', 50);
            $table->decimal('profundidad', 50);
            $table->decimal('capacidad', 50);
            $table->decimal('f_bomba', 50);
            $table->decimal('c_extraccion', 50);
            $table->decimal('voltaje', 50);
            $table->integer('acueducto');
            $table->integer('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pozos_profundos');
    }
}
