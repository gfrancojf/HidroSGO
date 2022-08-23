<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItmInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itm_inventario', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('orden');
            $table->integer('categoria');
            $table->integer('producto');
            $table->integer('cantidad');
            $table->integer('medida');
            $table->longText('describe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itm_inventario');
    }
}
