<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbUbicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eb_ubicacion', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('eb_id');
            $table->string('lat');
            $table->string('lon');
            $table->string('bien');
            $table->string('sector');
            $table->longText('direccion');
            $table->string('area');
            $table->string('nivel_abas');
            $table->string('tipo');
            $table->integer('origen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eb_ubicacion');
    }
}
