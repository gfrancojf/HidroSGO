<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecaudacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recaudacion', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('semana');
            $table->integer('gerencia');
            $table->integer('tipo');
            $table->date('fecha');
            $table->integer('suscriptores');
            $table->decimal('recaudado', 50, 0);
            $table->integer('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recaudacion');
    }
}
