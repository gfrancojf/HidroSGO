<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantasPotabilizadoraHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas_potabilizadora_historico', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('num_reg');
            $table->integer('potabilizadora');
            $table->decimal('c_entrada', 50);
            $table->decimal('t_entrada', 50);
            $table->decimal('color_entrada', 50);
            $table->decimal('diff_entrada', 50);
            $table->decimal('c_salida', 50);
            $table->decimal('t_salida', 50);
            $table->decimal('color_salida', 50);
            $table->decimal('color_residual', 50);
            $table->decimal('diff_salida', 50);
            $table->date('fecha');
            $table->string('hora');
            $table->integer('sistema_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plantas_potabilizadora_historico');
    }
}
