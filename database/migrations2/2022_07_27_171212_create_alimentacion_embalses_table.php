<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlimentacionEmbalsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimentacion_embalses', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('recolector');
            $table->integer('embalse');
            $table->integer('sistema');
            $table->decimal('litros_alimentos', 50, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alimentacion_embalses');
    }
}
