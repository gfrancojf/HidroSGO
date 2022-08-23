<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrippasCentralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brippas_central', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg');
            $table->string('nombre');
            $table->integer('acueducto');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->integer('num_registro');
            $table->date('fecha_created');
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
        Schema::dropIfExists('brippas_central');
    }
}
