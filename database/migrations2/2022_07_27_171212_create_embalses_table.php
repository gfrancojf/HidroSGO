<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmbalsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('embalses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_fuente');
            $table->decimal('c_total', 50);
            $table->decimal('c_util', 50);
            $table->decimal('superficie', 50);
            $table->integer('vida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('embalses');
    }
}
