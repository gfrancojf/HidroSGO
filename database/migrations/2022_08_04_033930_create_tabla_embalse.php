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
        Schema::create('embalses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reg')->comment('por descubrir');
            $table->string('nombre')->comment('nombre pozo profundo');
            $table->string('cronologia')->comment('cronologia');
            $table->unsignedBigInteger('id_infraestructura');
            $table->foreign('id_infraestructura')->references('id')->on('infraestructura');
            $table->softDeletes();
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
        Schema::dropIfExists('embalses');
    }
};
