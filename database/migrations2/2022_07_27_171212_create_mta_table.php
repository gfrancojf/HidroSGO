<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mta', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('req');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->string('cuadrante');
            $table->integer('id_mta_user');
            $table->integer('mta_hidrologica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mta');
    }
}
