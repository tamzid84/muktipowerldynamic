<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Permissions
        $permissions = [
            'create',
            'edit',
            'view',
            'delete',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Roles
        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $editor = Role::firstOrCreate(['name' => 'Editor']);
        $user = Role::firstOrCreate(['name' => 'User']);

        // Assign permissions

        // Admin: full access
        $admin->syncPermissions($permissions);

        // Editor: limited (no delete)
        $editor->syncPermissions([
            'create',
            'edit',
            'view',
        ]);

        // User: view only
        $user->syncPermissions([
            'view',
        ]);
    }
}