<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObraTomaFuenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obra_toma_fuente', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('tipo_toma');
            $table->integer('id_fuente');
            $table->decimal('medida_valor', 50);
            $table->decimal('gasto', 50);
            $table->longText('desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obra_toma_fuente');
    }
}
