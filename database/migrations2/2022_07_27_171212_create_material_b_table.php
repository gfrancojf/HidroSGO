<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_b', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('accion');
            $table->integer('material');
            $table->integer('material_a');
            $table->longText('describe');
            $table->longText('describe_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_b');
    }
}
