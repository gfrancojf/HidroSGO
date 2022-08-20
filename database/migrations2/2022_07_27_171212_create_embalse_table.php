<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbalseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embalse', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('embalse');
            $table->integer('tipo_embalse');
            $table->decimal('recoleccion_base', 50);
            $table->decimal('capacidad_base', 50);
            $table->decimal('recoleccion_modificada', 50);
            $table->decimal('capacidad_modificada', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('embalse');
    }
}
