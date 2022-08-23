<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrelacionesSistemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prelaciones_sistemas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sistema');
            $table->integer('objeto');
            $table->integer('tipo');
            $table->integer('linea');
            $table->integer('nivel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prelaciones_sistemas');
    }
}
