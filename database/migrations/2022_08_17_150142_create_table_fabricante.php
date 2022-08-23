<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

Schema::create('fabricante', function (Blueprint $table) {
    $table->id();
    $table->string('nombre')->comment('marca');
    $table->string('modelo')->comment('modelo');
    $table->string('serial')->comment('serial del componente');
    $table->string('origen')->comment('origen de la tecnologia');
    $table->string('ficha')->comment('ficha tecnica');
    $table->softDeletes();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fabricante');
    }
};