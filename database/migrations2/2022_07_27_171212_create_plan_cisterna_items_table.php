<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanCisternaItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_cisterna_items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg');
            $table->date('fecha');
            $table->integer('gerencia');
            $table->integer('parroquia');
            $table->integer('sector');
            $table->integer('cisterna');
            $table->decimal('entrega', 50, 0);
            $table->decimal('entregado', 50, 0);
            $table->date('fecha_entrega')->nullable();
            $table->integer('estatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_cisterna_items');
    }
}
