<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuencaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenca', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_fuente');
            $table->string('cuenca_principal');
            $table->string('afluentes');
            $table->string('nombre');
            $table->decimal('area', 50);
            $table->decimal('encurrimiento', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuenca');
    }
}
