<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManiobraCiclosHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maniobra_ciclos_historico', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('maniobra_ciclos_id');
            $table->integer('ciclo');
            $table->date('fecha_maniobra');
            $table->string('hora');
            $table->longText('detalle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maniobra_ciclos_historico');
    }
}
