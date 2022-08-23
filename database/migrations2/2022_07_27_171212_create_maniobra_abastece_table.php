<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManiobraAbasteceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maniobra_abastece', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('num_reg');
            $table->integer('tipo');
            $table->integer('item');
            $table->integer('sector');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maniobra_abastece');
    }
}
