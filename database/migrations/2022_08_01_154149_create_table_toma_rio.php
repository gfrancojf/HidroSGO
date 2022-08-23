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
        Schema::create('toma_rio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('nombre toma rio');
            $table->unsignedBigInteger('id_infraestructura');
            $table->foreign('id_infraestructura')->references('id')->on('infraestructura');
<<<<<<< HEAD

=======
>>>>>>> ab07a5e8078a6c4f61b4d393d45e2934681cfd12
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('toma_rio');
    }
};