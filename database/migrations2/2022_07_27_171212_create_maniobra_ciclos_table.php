<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManiobraCiclosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maniobra_ciclos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('area');
            $table->integer('ciclo');
            $table->string('maniobra');
            $table->integer('acueducto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maniobra_ciclos');
    }
}
