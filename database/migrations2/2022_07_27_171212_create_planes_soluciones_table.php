<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanesSolucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes_soluciones', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('acueducto');
            $table->integer('a');
            $table->integer('b');
            $table->integer('c');
            $table->integer('d');
            $table->integer('item');
            $table->integer('e');
            $table->integer('f');
            $table->longText('g');
            $table->longText('h');
            $table->longText('i');
            $table->integer('j');
            $table->longText('k');
            $table->integer('l');
            $table->decimal('m', 50, 0);
            $table->decimal('n', 50, 0);
            $table->longText('o');
            $table->decimal('p', 50, 0);
            $table->date('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planes_soluciones');
    }
}
