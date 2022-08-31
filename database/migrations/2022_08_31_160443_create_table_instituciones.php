<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('nombre institucion');
            $table->string('rif');
            $table->unsignedBigInteger('id_logo');
            $table->unsignedBigInteger('id_banner');
            $table->unsignedBigInteger('id_hidrologica');
            $table->foreign('id_hidrologica')->references('id')->on('hidrologicas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituciones');
    }
};
