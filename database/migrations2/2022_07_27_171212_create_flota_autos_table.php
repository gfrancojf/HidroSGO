<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlotaAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flota_autos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg')->nullable();
            $table->integer('marca');
            $table->string('modelo');
            $table->integer('ano');
            $table->integer('tipo');
            $table->integer('gerencia');
            $table->string('placa');
            $table->string('carroceria');
            $table->string('serial_motor');
            $table->integer('combustible');
            $table->integer('estado');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->string('sector');
            $table->decimal('capacidad', 50, 0);
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
        Schema::dropIfExists('flota_autos');
    }
}
