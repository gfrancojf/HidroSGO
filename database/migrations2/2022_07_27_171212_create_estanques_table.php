<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstanquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estanques', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('numreg');
            $table->string('nombre');
            $table->integer('tipo');
            $table->string('utm_a');
            $table->string('utm_b');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->string('sector');
            $table->decimal('salida', 50, 0);
            $table->decimal('capacidad', 50, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estanques');
    }
}
