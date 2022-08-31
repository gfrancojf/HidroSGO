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
        Schema::create('tipo_proceso_hidrico', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_proceso_hidrico')->comment('tipos de infraestructura');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('infraestructura', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('infraestructura');
            $table->string('propietario')->comment('propietario');
            $table->string('constructura')->comment('constructura');
            $table->string('proposito')->comment('proposito');
            $table->unsignedBigInteger('id_coordenadas');
            $table->unsignedBigInteger('poblacion_servida');
            $table->unsignedBigInteger('id_tipo_infraestructura');
            $table->unsignedBigInteger('id_sistema');
            $table->unsignedBigInteger('id_acueducto');
            $table->unsignedBigInteger('id_tipo_proceso_hidrico');
            $table->unsignedBigInteger('id_user');

            $table->foreign('id_coordenadas')->references('id')->on('ubicacion_geografica');
            $table->foreign('id_sistema')->references('id')->on('sistemas');
            $table->foreign('id_acueducto')->references('id')->on('acueductos');
            $table->foreign('id_tipo_infraestructura')->references('id')->on('tipo_infraestructura');
            $table->foreign('id_tipo_proceso_hidrico')->references('id')->on('tipo_proceso_hidrico');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('tipo_proceso_hidrico');
        Schema::dropIfExists('infraestructura');
    }
};
