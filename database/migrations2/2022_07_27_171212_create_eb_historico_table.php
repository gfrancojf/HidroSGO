<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbHistoricoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eb_historico', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('eb_id');
            $table->integer('eb_patron');
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
        Schema::dropIfExists('eb_historico');
    }
}
