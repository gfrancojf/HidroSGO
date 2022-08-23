<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateVistaBombeoView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('CREATE VIEW `vista_bombeo` AS select `sigo2`.`eb_bomba`.`id` AS `id`,`sigo2`.`eb_bomba`.`id_bomba` AS `id_bomba`,`sigo2`.`eb_bomba`.`id_grupo` AS `id_grupo`,`sigo2`.`eb_bomba`.`marca` AS `marca`,`sigo2`.`eb_bomba`.`modelo` AS `modelo`,`sigo2`.`eb_bomba`.`etapas` AS `etapas`,`sigo2`.`eb_bomba`.`tipo` AS `tipo`,`sigo2`.`eb_bomba`.`altura` AS `altura`,`sigo2`.`eb_bomba`.`caudal` AS `caudal`,`sigo2`.`eb_bomba`.`d_impulsor` AS `d_impulsor`,`sigo2`.`eb_bomba`.`eficiencia` AS `eficiencia`,`sigo2`.`eb_bomba`.`potencia` AS `potencia`,`sigo2`.`eb_bomba`.`npshr` AS `npshr`,`sigo2`.`eb_bomba`.`temperatura` AS `temperatura`,`sigo2`.`eb_bomba`.`sello` AS `sello`,`sigo2`.`eb_bomba`.`rodamiento_a` AS `rodamiento_a`,`sigo2`.`eb_bomba`.`rodamiento_b` AS `rodamiento_b`,`sigo2`.`item_bombeo`.`id` AS `id_bombeo`,`sigo2`.`item_bombeo`.`eb` AS `eb`,`sigo2`.`item_bombeo`.`alimentador` AS `alimentador`,`sigo2`.`item_bombeo`.`acueducto` AS `acueducto`,`sigo2`.`item_bombeo`.`acueducto2` AS `acueducto2`,`sigo2`.`item_bombeo`.`municipio` AS `municipio`,`sigo2`.`item_bombeo`.`parroquia` AS `parroquia`,`sigo2`.`item_bombeo`.`itm1` AS `itm1`,`sigo2`.`item_bombeo`.`itm2` AS `itm2`,`sigo2`.`item_bombeo`.`itm3` AS `itm3`,`sigo2`.`item_bombeo`.`itm4` AS `itm4`,`sigo2`.`item_bombeo`.`itm5` AS `itm5`,`sigo2`.`item_bombeo`.`itm6` AS `itm6`,`sigo2`.`item_bombeo`.`itm7` AS `itm7`,`sigo2`.`item_bombeo`.`itm8` AS `itm8`,`sigo2`.`item_bombeo`.`itm9` AS `itm9`,`sigo2`.`item_bombeo`.`fecha_modificacion` AS `fecha_modificacion`,`sigo2`.`item_bombeo`.`hora_modificacion` AS `hora_modificacion`,`sigo2`.`item_bombeo`.`tipo` AS `tipo_bombeo` from (`sigo2`.`eb_bomba` join `sigo2`.`item_bombeo`) where `sigo2`.`eb_bomba`.`id_bomba` = `sigo2`.`item_bombeo`.`eb`');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS `vista_bombeo`');
    }
}
