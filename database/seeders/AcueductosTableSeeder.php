<?php

namespace Database\Seeders;

use App\Models\Acueducto;
use Illuminate\Database\Seeder;

class AcueductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acueducto::create(['id' => '1', 'nombre' => 'Gerencia Altos Mirandinos', 'capacidad_distribucion' => '0.00', 'capacidad_modificada' => '0.00', 'id_estado' => 15]);
        Acueducto::create(['id' => '2', 'nombre' => 'Gerencia Metropolitano', 'capacidad_distribucion' => '0.00', 'capacidad_modificada' => '0.00', 'id_estado' => 10]);
        Acueducto::create(['id' => '3', 'nombre' => 'Gerencia Valles del Tuy', 'capacidad_distribucion' => '0.00', 'capacidad_modificada' => '0.00', 'id_estado' => 15]);
        Acueducto::create(['id' => '4', 'nombre' => 'Gerencia Guarenas Guatire', 'capacidad_distribucion' => '0.00', 'capacidad_modificada' => '0.00', 'id_estado' => 15]);
        Acueducto::create(['id' => '5', 'nombre' => 'Gerencia Barlovento', 'capacidad_distribucion' => '0.00', 'capacidad_modificada' => '0.00', 'id_estado' => 15]);
        Acueducto::create(['id' => '7', 'nombre' => 'Gerencia Vargas', 'capacidad_distribucion' => '0.00', 'capacidad_modificada' => '0.00', 'id_estado' => '22']);
        Acueducto::create(['id' => '11', 'nombre' => 'Gerencia Sucre', 'capacidad_distribucion' => '0.00', 'capacidad_modificada' => '0.00', 'id_estado' => '15']);
    }
}
