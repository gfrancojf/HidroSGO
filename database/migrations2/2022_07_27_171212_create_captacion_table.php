<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaptacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('captacion', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('tipo');
            $table->integer('id_itm');
            $table->integer('acueducto');
            $table->decimal('num_a', 50);
            $table->decimal('num_b', 50);
            $table->longText('desc');
            $table->date('fecha');
            $table->string('hora');
            $table->longText('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('captacion');
    }
}
