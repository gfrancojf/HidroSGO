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
        Schema::create('tipo_caracteristicas_accion_obras', function (Blueprint $table) {
            $table->id();
            $table->string('caracteristicas_accion_obras');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('tipo_proyecto', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_proyecto');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('tipo_accion_realizar_obras', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_accion_realizar_obras');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('obras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_proyecto');
            $table->unsignedBigInteger('id_tipo_proceso_hidrico');
            $table->unsignedBigInteger('id_tipo_infraestructura');
            $table->unsignedBigInteger('id_accion_realizar');
            $table->unsignedBigInteger('id_tipo_caracteristica_accion_obras');
            $table->string('descripcion');
            $table->string('lps_recuperados');
            $table->string('mejoras_servicio');
            $table->unsignedBigInteger('id_accion');

            $table->foreign('id_tipo_proyecto')->references('id')->on('tipo_proyecto');
            $table->foreign('id_tipo_proceso_hidrico')->references('id')->on('tipo_proceso_hidrico');
            $table->foreign('id_tipo_infraestructura')->references('id')->on('tipo_infraestructura');
            $table->foreign('id_accion_realizar')->references('id')->on('tipo_accion_realizar_obras');
            $table->foreign('id_tipo_caracteristica_accion_obras')->references('id')->on('tipo_caracteristicas_accion_obras');
            $table->foreign('id_accion')->references('id')->on('acciones_obras');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('obras_planes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_plan');
            $table->foreign('id_plan')->references('id')->on('planes');
            $table->unsignedBigInteger('id_obra');
            $table->foreign('id_obra')->references('id')->on('obras');
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
        Schema::dropIfExists('tipo_caracteristicas_accion_obras');
        Schema::dropIfExists('tipo_proyecto');
        Schema::dropIfExists('tipo_accion_realizar_obras');
        Schema::dropIfExists('obras');
        Schema::dropIfExists('obras_planes');
    }
};
