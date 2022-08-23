<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioBripassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_bripass', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('req');
            $table->integer('tipo');
            $table->string('usuario');
            $table->string('cedula');
            $table->string('telefono');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_bripass');
    }
}
