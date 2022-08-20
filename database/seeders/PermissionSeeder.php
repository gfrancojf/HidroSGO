<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//agregamos el modelo de permisos de spatie
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-users', 'crear-users', 'editar-users', 'borrar-users',
            'ver-roles', 'crear-roles', 'editar-roles', 'borrar-roles',
            /// ---------------------- ROLES PRINCIPALES
            'ver-acueductos', 'crear-Acueductos', 'editar-Acueductos', 'borrar-Acueductos',
            'ver-diquetoma', 'crear-diquetoma', 'editar-diquetoma', 'borrar-diquetoma',
            'ver-pozoprofundo', 'crear-pozoprofundo', 'editar-pozoprofundo', 'borrar-pozoprofundo',
            'ver-embalses', 'crear-embalses', 'editar-embalses', 'borrar-embalses',
            'ver-tomaRios', 'crear-tomaRios', 'editar-tomaRios', 'borrar-tomaRios',
            'ver-captacion', 'crear-captacion', 'editar-captacion', 'borrar-captacion',
            'ver-tomaAgua', 'crear-tomaAgua', 'editar-tomaAgua', 'borrar-tomaAgua',
            'ver-sistema', 'crear-sistema', 'editar-sistema', 'borrar-sistema',
            'ver-tipofuente', 'crear-tipofuente', 'editar-tipofuente', 'borrar-tipofuente',
            'ver-infraestructura', 'crear-infraestructura', 'editar-infraestructura', 'borrar-infraestructura',
            'ver-manifold', 'crear-manifold', 'editar-manifold', 'borrar-manifold',
            'ver-valvulas', 'crear-valvulas', 'editar-valvulas', 'borrar-valvulas',
            'ver-dtecnicos', 'crear-dtecnicos', 'editar-dtecnicos', 'borrar-dtecnicos',
            'ver-bombeo', 'crear-bombeo', 'editar-bombeo', 'borrar-bombeo',

        ];

        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
    }
}
