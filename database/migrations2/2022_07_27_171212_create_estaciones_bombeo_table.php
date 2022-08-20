<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstacionesBombeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estaciones_bombeo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg');
            $table->string('nombre');
            $table->longText('utm_a');
            $table->longText('utm_b');
            $table->integer('unidades');
            $table->integer('operatividad');
            $table->integer('tipo');
            $table->string('usuario');
            $table->integer('alimentador');
            $table->integer('acueducto');
            $table->integer('acueducto2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estaciones_bombeo');
    }
}
