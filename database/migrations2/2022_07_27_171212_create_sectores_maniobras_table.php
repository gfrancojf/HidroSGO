<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectoresManiobrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectores_maniobras', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('ciclo');
            $table->integer('acueducto');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->integer('sector');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectores_maniobras');
    }
}
