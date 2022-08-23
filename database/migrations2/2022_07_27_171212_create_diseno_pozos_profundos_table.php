<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisenoPozosProfundosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseno_pozos_profundos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_pozo');
            $table->decimal('a', 50);
            $table->decimal('b', 50);
            $table->decimal('c', 50);
            $table->decimal('d', 50);
            $table->decimal('e', 50);
            $table->decimal('f', 50);
            $table->decimal('g', 50);
            $table->decimal('h', 50);
            $table->decimal('i', 50);
            $table->integer('j');
            $table->integer('k');
            $table->decimal('l', 50);
            $table->decimal('m', 50);
            $table->integer('n');
            $table->decimal('o', 50);
            $table->decimal('p', 50);
            $table->decimal('q', 50);
            $table->decimal('r', 50);
            $table->decimal('s', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diseno_pozos_profundos');
    }
}
