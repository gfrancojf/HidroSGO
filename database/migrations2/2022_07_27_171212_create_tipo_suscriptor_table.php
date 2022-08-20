<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSuscriptorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_suscriptor', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre');
            $table->decimal('tasa', 50, 0);
            $table->date('vigencia');
            $table->integer('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_suscriptor');
    }
}
