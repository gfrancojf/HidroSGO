<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectores', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->string('comunidad');
            $table->integer('cuadrante');
            $table->integer('poblacion');
            $table->longText('latitud')->nullable();
            $table->longText('longitud')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectores');
    }
}
