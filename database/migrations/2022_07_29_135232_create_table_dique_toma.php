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
        Schema::create('dique_tomas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reg');
            $table->string('nombre')->comment('nombre dique');
            $table->string('toma_rio');
            $table->unsignedDecimal('caudal_diseno');
            $table->unsignedDecimal('caudal_recibe');
            $table->integer('status');
            $table->unsignedBigInteger('id_infraestructura');
            $table->foreign('id_infraestructura')->references('id')->on('infraestructura');
            
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
        Schema::dropIfExists('dique_tomas');
    }
};