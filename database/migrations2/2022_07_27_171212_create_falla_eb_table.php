<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFallaEbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('falla_eb', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('grupo');
            $table->integer('unidad');
            $table->integer('pieza');
            $table->longText('descr');
            $table->integer('eb');
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
        Schema::dropIfExists('falla_eb');
    }
}
