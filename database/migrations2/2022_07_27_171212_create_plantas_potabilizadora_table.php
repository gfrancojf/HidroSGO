<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantasPotabilizadoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas_potabilizadora', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg');
            $table->string('nombre');
            $table->string('utm_a');
            $table->string('utm_b');
            $table->decimal('caudal', 50);
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
        Schema::dropIfExists('plantas_potabilizadora');
    }
}
