<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAveriaDescripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('averia_descripcion', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg_averia');
            $table->string('telefono');
            $table->string('nombre');
            $table->longText('direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('averia_descripcion');
    }
}
