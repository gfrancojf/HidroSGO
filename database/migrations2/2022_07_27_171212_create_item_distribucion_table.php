<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemDistribucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_distribucion', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('estado');
            $table->integer('acueducto');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->integer('tipo_item');
            $table->string('nombre');
            $table->integer('agrega');
            $table->decimal('presion', 50);
            $table->decimal('consumo', 50);
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_distribucion');
    }
}
