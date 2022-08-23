<?php

namespace Database\Seeders;

use App\Models\TipoFuente;
use Illuminate\Database\Seeder;

class TipoFuentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoFuente::create(['id' => '1', 'tipo' => 'Embalses']);
        TipoFuente::create(['id' => '2', 'tipo' => 'Dique Toma']);
        TipoFuente::create(['id' => '3', 'tipo' => 'Toma Rio']);
        TipoFuente::create(['id' => '4', 'tipo' => 'Pozo Profundo']);
        TipoFuente::create(['id' => '5', 'tipo' => 'Toma Maritima']);
        TipoFuente::create(['id' => '6', 'tipo' => 'Galeria Filtrante']);
    }
}
