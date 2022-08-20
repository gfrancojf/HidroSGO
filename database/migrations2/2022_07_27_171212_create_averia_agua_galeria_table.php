<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAveriaAguaGaleriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('averia_agua_galeria', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_averia');
            $table->string('img_a');
            $table->string('img_b');
            $table->string('img_c');
            $table->string('img_d');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('averia_agua_galeria');
    }
}
