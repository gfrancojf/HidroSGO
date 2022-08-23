<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTomaRiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toma_rios', function (Blueprint $table) {
            $table->integer('id', true);
            $table->bigInteger('reg');
            $table->string('nombre');
            $table->integer('estado');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->longText('desc_ubicacion');
            $table->string('utm_a');
            $table->string('utm_b');
            $table->integer('acueducto');
            $table->string('toma_rio');
            $table->decimal('caudal_diseno', 50);
            $table->decimal('caudal_recibe', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toma_rios');
    }
}
