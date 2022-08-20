<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecolectorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recolector', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre');
            $table->integer('tipo');
            $table->decimal('recoleccion_estimada', 50);
            $table->decimal('recoleccion_modificada', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recolector');
    }
}
