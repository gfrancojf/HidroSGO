<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *AUNQUE ACA SE VAN A REGISTRAR CADA UNO DE LOS EVENTOS, CADA VEZ QUE SE REGISTRE UN EVENTO
     *EL ESTATUS REPORTADO DE ESTE DEBERA SER ACTUALIZADO TAMBIEN EN LA TABLA DE LA INFRAESTRUCTURA
     *ESPECIFICADA EN LA CELDA DE OPERATIVIDAD CON JUSTAMENTE LA MISMA VARIABLE DE OPERATIVIDAD REPORTADA
     *@return void
     */
    public function up()
    {
        Schema::create('tipo_evento', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_evento');
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->tinyint('estatus_operativo')->comment('operatividad');
            $table->timestamp('fecha');
            $table->string('observaciones');
            $table->unsignedBigInteger('id_tipo_evento');
            $table->unsignedBigInteger('id_infraestructura');
            $table->foreign('id_tipo_evento')->references('id')->on('tipo_evento');
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
        Schema::dropIfExists('eventos');
    }
};
