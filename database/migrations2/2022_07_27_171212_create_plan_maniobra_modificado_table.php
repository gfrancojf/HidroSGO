<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanManiobraModificadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_maniobra_modificado', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('ciclo');
            $table->integer('l');
            $table->integer('m');
            $table->integer('mm');
            $table->integer('j');
            $table->integer('v');
            $table->integer('s');
            $table->integer('d');
            $table->integer('horas_registradas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_maniobra_modificado');
    }
}
