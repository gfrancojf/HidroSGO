<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleEntregaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_entrega', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('plan_maniobra');
            $table->string('dia_1');
            $table->integer('valvula_1');
            $table->decimal('entrega_1', 50);
            $table->decimal('est_entrega_1', 50);
            $table->string('dia_2');
            $table->integer('valvula_2');
            $table->decimal('entrega_2', 50);
            $table->decimal('est_entrega_2', 50);
            $table->string('dia_3');
            $table->integer('valvula_3');
            $table->decimal('entrega_3', 50);
            $table->decimal('est_entrega_3', 50);
            $table->string('dia_4');
            $table->integer('valvula_4');
            $table->decimal('entrega_4', 50);
            $table->decimal('est_entrega_4', 50);
            $table->string('dia_5');
            $table->integer('valvula_5');
            $table->decimal('entrega_5', 50);
            $table->decimal('est_entrega_5', 50);
            $table->string('dia_6');
            $table->integer('valvula_6');
            $table->decimal('entrega_6', 50);
            $table->decimal('est_entrega_6', 50);
            $table->string('dia_7');
            $table->integer('valvula_7');
            $table->decimal('entrega_7', 50);
            $table->decimal('est_entrega_7', 50);
            $table->decimal('entrega_real', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_entrega');
    }
}
