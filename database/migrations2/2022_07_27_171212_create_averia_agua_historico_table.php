<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAveriaAguaHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('averia_agua_historico', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('averia');
            $table->date('fecha');
            $table->string('hora');
            $table->longText('describa_falla');
            $table->integer('flias')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('averia_agua_historico');
    }
}
