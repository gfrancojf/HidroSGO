<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoBombeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_bombeo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('eb');
            $table->integer('tipo');
            $table->decimal('succion_min', 50);
            $table->decimal('succion_max', 50);
            $table->decimal('descarga_min', 50);
            $table->decimal('descarga_max', 50);
            $table->decimal('amp_min', 50);
            $table->decimal('amp_max', 50);
            $table->decimal('vol_min', 50);
            $table->decimal('vol_max', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_bombeo');
    }
}
