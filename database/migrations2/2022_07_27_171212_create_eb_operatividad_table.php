<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbOperatividadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eb_operatividad', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_eb');
            $table->integer('tipo_eb');
            $table->string('num_grupo');
            $table->integer('estatus_grupo');
            $table->integer('tipo_reporte');
            $table->decimal('succion', 50);
            $table->decimal('descarga', 50);
            $table->decimal('amp', 50);
            $table->decimal('volt', 50);
            $table->longText('desc');
            $table->decimal('operatividad', 50);
            $table->date('fecha');
            $table->string('hora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eb_operatividad');
    }
}
