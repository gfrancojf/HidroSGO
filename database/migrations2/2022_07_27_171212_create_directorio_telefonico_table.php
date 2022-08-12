<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorioTelefonicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorio_telefonico', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre');
            $table->integer('gerencia');
            $table->integer('cargos');
            $table->integer('movil');
            $table->integer('telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directorio_telefonico');
    }
}
