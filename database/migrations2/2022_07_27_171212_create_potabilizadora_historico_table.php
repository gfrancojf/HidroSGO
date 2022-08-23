<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotabilizadoraHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potabilizadora_historico', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('planta');
            $table->date('fecha');
            $table->string('hora');
            $table->longText('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('potabilizadora_historico');
    }
}
