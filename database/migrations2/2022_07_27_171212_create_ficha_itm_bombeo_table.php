<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaItmBombeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_itm_bombeo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg');
            $table->integer('acueducto');
            $table->integer('estacion');
            $table->integer('pre_estacion');
            $table->integer('grupo');
            $table->integer('tipo');
            $table->integer('municipio');
            $table->integer('parroquia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha_itm_bombeo');
    }
}
