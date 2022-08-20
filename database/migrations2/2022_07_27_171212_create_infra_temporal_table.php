<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraTemporalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infra_temporal', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('item');
            $table->string('nombre');
            $table->integer('gerencia');
            $table->integer('estado');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->longText('sector');
            $table->integer('proceso');
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
        Schema::dropIfExists('infra_temporal');
    }
}
