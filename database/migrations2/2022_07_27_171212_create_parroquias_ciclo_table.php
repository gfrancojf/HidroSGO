<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParroquiasCicloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias_ciclo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('ciclo');
            $table->integer('parroquia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parroquias_ciclo');
    }
}
