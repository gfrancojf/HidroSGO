<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('num_reg');
            $table->integer('gerencia');
            $table->integer('ano');
            $table->integer('semanas');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->date('fecha');
            $table->integer('cantidad');
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
        Schema::dropIfExists('proyecto');
    }
}
