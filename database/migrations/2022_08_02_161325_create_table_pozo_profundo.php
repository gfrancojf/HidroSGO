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
        Schema::create('pozo_profundos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reg')->comment('por descubrir');
            $table->string('nombre')->comment('nombre pozo profundo');
            $table->unsignedDecimal('caudal_diseno');
            $table->unsignedBigInteger('id_infraestructura');
            $table->foreign('id_infraestructura')->references('id')->on('infraestructura');
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
        Schema::dropIfExists('pozo_profundos');
    }
};
