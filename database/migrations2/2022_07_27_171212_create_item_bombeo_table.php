<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemBombeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_bombeo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('eb');
            $table->integer('alimentador');
            $table->integer('acueducto');
            $table->integer('acueducto2');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->integer('itm1');
            $table->integer('itm2');
            $table->integer('itm3');
            $table->integer('itm4');
            $table->integer('itm5');
            $table->integer('itm6');
            $table->integer('itm7');
            $table->integer('itm8');
            $table->integer('itm9');
            $table->date('fecha_modificacion');
            $table->string('hora_modificacion');
            $table->integer('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_bombeo');
    }
}
