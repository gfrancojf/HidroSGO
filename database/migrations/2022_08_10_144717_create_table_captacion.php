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
        Schema::create('captacion', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_fuente');
            $table->unsignedBigInteger('id_fuente');
            $table->unsignedBigInteger('id_acueducto');
            $table->unsignedDecimal('cuota');
            $table->unsignedDecimal('extraccion');
            $table->string('observacion');
            $table->foreign('id_tipo_fuente')->references('id')->on('tipo_fuentes');
            $table->foreign('id_acueducto')->references('id')->on('acueductos');
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
        Schema::dropIfExists('captacion');
    }
};
