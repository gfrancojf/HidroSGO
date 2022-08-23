<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            RoleHasPermissionSeeder::class,
            UsersTableSeeder::class,
            VenezuelaTableSeeder::class,
            AcueductosTableSeeder::class,
            TipoFuentesTableSeeder::class,
        ]);
    }
}
