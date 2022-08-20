<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAliviaderoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliviadero', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('tipo_aliviadero');
            $table->integer('id_fuente');
            $table->decimal('lon_cresta', 50);
            $table->decimal('carga', 50);
            $table->decimal('descarga', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aliviadero');
    }
}
