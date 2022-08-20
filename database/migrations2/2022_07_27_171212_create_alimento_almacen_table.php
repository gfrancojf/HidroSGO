<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentoAlmacenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimento_almacen', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sistema');
            $table->integer('sistema2');
            $table->integer('almacen');
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
        Schema::dropIfExists('alimento_almacen');
    }
}
