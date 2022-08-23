<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanAbastecimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_abastecimiento', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_maniobra');
            $table->integer('semana');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('l');
            $table->integer('m');
            $table->integer('mm');
            $table->integer('j');
            $table->integer('v');
            $table->integer('s');
            $table->integer('d');
            $table->integer('sistema');
            $table->integer('sistema_2');
            $table->integer('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_abastecimiento');
    }
}
