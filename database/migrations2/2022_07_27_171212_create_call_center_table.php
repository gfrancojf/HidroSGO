<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_center', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('acueducto');
            $table->integer('municipio');
            $table->integer('parroquia');
            $table->longText('sector');
            $table->string('ciclo');
            $table->string('l');
            $table->string('m');
            $table->string('mm');
            $table->string('j');
            $table->string('v');
            $table->string('s');
            $table->string('d');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('call_center');
    }
}
