<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbPatronTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eb_patron', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('eb_id');
            $table->integer('tipo_eb');
            $table->integer('tipo_diseno');
            $table->integer('eb_controller');
            $table->string('valor_nominal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eb_patron');
    }
}
