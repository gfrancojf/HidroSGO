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
            $table->unsignedBigInteger('estado');
            $table->unsignedBigInteger('municipio');  
            $table->unsignedBigInteger('parroquia'); 
            $table->string('desc_ubicacion')->comment('Por definir');
            $table->string('utm_a'); 
            $table->string('utm_b');
            $table->string('proposito')->comment('proposito de uso');
            $table->string('propietario')->comment('propietario');
            $table->string('constructora')->comment('constructora');
            $table->string('cronologia')->comment('cronologia');
            $table->foreign('estado')->references('id')->on('estados');
            $table->foreign('municipio')->references('id')->on('municipios');
            $table->foreign('parroquia')->references('id')->on('parroquias');
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
        Schema::dropIfExists('tabla_embalse');
    }
};
