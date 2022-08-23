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
     Schema::create('plantas', function (Blueprint $table) {
    $table->id();
    $table->string('nombre')->comment('nombre planta');
    $table->unsignedDecimal('caudal_diseño');
    $table->unsignedBigInteger('id_tipo_planta');
    $table->unsignedBigInteger('id_infraestructura');
    $table->foreign('id_tipo_planta')->references('id')->on('tipo_planta');
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
        Schema::dropIfExists('plantas');
    }
};