<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAveriaAguaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('averia_agua_items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('averia');
            $table->integer('cantidad');
            $table->string('descripcion');
            $table->integer('medida');
            $table->integer('materia');
            $table->integer('acueducto');
            $table->date('fecha_desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('averia_agua_items');
    }
}
