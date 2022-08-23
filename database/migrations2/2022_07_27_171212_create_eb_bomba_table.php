<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbBombaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eb_bomba', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_bomba');
            $table->string('id_grupo');
            $table->integer('marca');
            $table->integer('modelo');
            $table->string('etapas');
            $table->string('tipo');
            $table->decimal('altura', 50, 0);
            $table->decimal('caudal', 50, 0);
            $table->decimal('d_impulsor', 50, 0);
            $table->decimal('eficiencia', 50, 0);
            $table->integer('potencia');
            $table->integer('npshr');
            $table->decimal('temperatura', 50, 0);
            $table->string('sello');
            $table->string('rodamiento_a');
            $table->string('rodamiento_b');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eb_bomba');
    }
}
