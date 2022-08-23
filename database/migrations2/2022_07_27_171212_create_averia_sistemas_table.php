<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAveriaSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('averia_sistemas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('item');
            $table->integer('control');
            $table->bigInteger('num_reg');
            $table->integer('sistema');
            $table->integer('status');
            $table->longText('des');
            $table->date('fecha')->nullable();
            $table->string('hora');
            $table->string('pasaron');
            $table->integer('tipo');
            $table->string('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('averia_sistemas');
    }
}
