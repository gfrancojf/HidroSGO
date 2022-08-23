<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosSistemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos_sistema', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('fecha');
            $table->string('hora');
            $table->integer('tipo');
            $table->string('modulo');
            $table->integer('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos_sistema');
    }
}
