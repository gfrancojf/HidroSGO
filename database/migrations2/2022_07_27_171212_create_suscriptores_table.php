<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscriptoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscriptores', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('acueducto');
            $table->integer('tipo');
            $table->integer('cantidad');
            $table->decimal('valor', 50, 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suscriptores');
    }
}
