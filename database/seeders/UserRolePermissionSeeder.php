<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@mitienda.com')->first();
        $superAdminRole = Role::where('name', 'SuperAdmin')->first();
        $permissions = Permission::all();

        // Asignar rol 'SuperAdmin' al usuario
        $user->assignRole($superAdminRole);

        // Asignar todos los permisos al rol 'SuperAdmin'
        $superAdminRole->syncPermissions($permissions);
    }
}
