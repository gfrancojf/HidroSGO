<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosPartidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos_partidas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contrato');
            $table->integer('partida');
            $table->longText('descripcion');
            $table->date('fecha_final');
            $table->decimal('monto_base', 50, 0);
            $table->decimal('monto_desembolso', 50, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos_partidas');
    }
}
