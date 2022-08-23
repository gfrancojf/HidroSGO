<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcueductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acueducto', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre');
            $table->decimal('capacidad_distribucion', 50);
            $table->decimal('capacidad_modificada', 50);
            $table->integer('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acueducto');
    }
}
