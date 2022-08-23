<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallCenterRTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_center_r', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sector');
            $table->integer('ciclo');
            $table->integer('acueducto');
            $table->date('fecha');
            $table->string('hora');
            $table->integer('registrador');
            $table->string('encuestado');
            $table->string('telefono');
            $table->string('mta');
            $table->string('pregunta_a');
            $table->string('pregunta_b');
            $table->string('pregunta_b_1');
            $table->string('pregunta_b_2');
            $table->string('l', 50);
            $table->string('m');
            $table->string('mm');
            $table->string('j');
            $table->string('v');
            $table->string('s');
            $table->string('d');
            $table->integer('horas');
            $table->longText('observaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call_center_r');
    }
}
