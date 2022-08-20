<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('user');
            $table->string('pass');
            $table->string('full_nombre');
            $table->integer('acueducto');
            $table->integer('acceso');
            $table->integer('nivel');
            $table->integer('area');
            $table->string('telefono');
            $table->string('email');
            $table->integer('estatus');
            $table->integer('id_bripass');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('login');
    }
}
