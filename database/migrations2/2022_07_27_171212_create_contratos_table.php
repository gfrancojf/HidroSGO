<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('contrato');
            $table->longText('denominacion');
            $table->integer('tipo');
            $table->date('fecha');
            $table->string('contratista');
            $table->integer('lapsos');
            $table->decimal('monto_base', 50, 0);
            $table->decimal('iva', 50, 0);
            $table->decimal('monto_total', 50, 0);
            $table->integer('partidas');
            $table->integer('avance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
