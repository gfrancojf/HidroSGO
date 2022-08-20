<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanCisternaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_cisterna', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg');
            $table->date('fecha');
            $table->integer('gerencia');
            $table->decimal('estimado', 50, 0);
            $table->decimal('entregado', 50, 0);
            $table->integer('viajes');
            $table->integer('usuario');
            $table->date('fecha_carga');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_cisterna');
    }
}
