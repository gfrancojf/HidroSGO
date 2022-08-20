<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientoAlmacenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_almacen', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cateogoria');
            $table->integer('producto');
            $table->decimal('cantidad', 50, 0);
            $table->integer('control');
            $table->date('fecha');
            $table->integer('procede');
            $table->integer('destino');
            $table->integer('mov');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimiento_almacen');
    }
}
