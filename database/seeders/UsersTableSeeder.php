<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $user = User::create([
            'name' => 'SuperAdmin',
            'dni' => '12345678',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
        ]);
        $user->assignRole('Administrador');

        $user = User::create([
            'name' => 'SuperAdmin2',
            'dni' => '123456789',
            'email' => 'admin2@admin.com',
            'password' => bcrypt('123456789'),
        ]);
        $user->assignRole('Administrador');

        $user = User::create([
            'name' => 'Administrador',
            'dni' => '1234567',
            'email' => 'admin3@admin.com',         
            'password' => bcrypt('1'),
        ]);
        $user->assignRole('Administrador');
          
    }
}
