<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presa', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_fuente');
            $table->integer('id_tipo');
            $table->decimal('max_altura', 50);
            $table->decimal('long_cresta', 50);
            $table->string('talud_arriba');
            $table->string('talud_abajo');
            $table->decimal('volumen', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presa');
    }
}
