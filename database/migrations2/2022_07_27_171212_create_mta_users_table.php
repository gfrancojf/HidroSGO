<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mta_users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('mta_id');
            $table->string('tipo_user', 50);
            $table->string('apellido');
            $table->string('nombre');
            $table->string('telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mta_users');
    }
}
