<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlavePresionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llave_presion', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('estado');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->integer('sistema');
            $table->string('nombre');
            $table->decimal('presion_estimada', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llave_presion');
    }
}
