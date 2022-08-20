<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManiobraModificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maniobra_modificacion', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('ciclo');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->integer('usuario');
            $table->string('semana', 50);
            $table->string('dia', 100);
            $table->integer('m1');
            $table->integer('m2');
            $table->integer('m3');
            $table->date('fecha_modificacion');
            $table->string('hora');
            $table->longText('detalle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maniobra_modificacion');
    }
}
