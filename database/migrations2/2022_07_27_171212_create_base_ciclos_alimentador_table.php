<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaseCiclosAlimentadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_ciclos_alimentador', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('area');
            $table->integer('sistema');
            $table->integer('alimentador');
            $table->integer('acueducto');
            $table->integer('ciclo');
            $table->integer('maniobra');
            $table->decimal('poblacion_a', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_ciclos_alimentador');
    }
}
