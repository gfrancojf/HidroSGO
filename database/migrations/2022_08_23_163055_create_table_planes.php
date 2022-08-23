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
        Schema::create('tipo_plan', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_plan');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('semanas', function (Blueprint $table) {
            $table->id();
            $table->string('semanas');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('planes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->unsignedBigInteger('id_acueducto');
            $table->unsignedBigInteger('id_semana');
            $table->unsignedBigInteger('id_tipo_plan');
            $table->integer('facturacion');
            $table->string('nombre_plan');
            $table->unsignedBigInteger('id_datos_plan');

            $table->foreign('id_acueducto')->references('id')->on('acueductos');
            $table->foreign('id_semana')->references('id')->on('semanas');
            $table->foreign('id_tipo_plan')->references('id')->on('tipo_plan');
            $table->foreign('id_datos_plan')->references('id')->on('datos_planes');
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
        Schema::dropIfExists('tipo_plan');
        Schema::dropIfExists('semanas');
        Schema::dropIfExists('planes');
    }
};
