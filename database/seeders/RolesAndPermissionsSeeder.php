<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Setup basic permissions

        // User permissions
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Role permissions
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        // Permission permissions
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        // Project permissions
        Permission::create(['name' => 'create project']);
        Permission::create(['name' => 'read project']);
        Permission::create(['name' => 'update project']);
        Permission::create(['name' => 'delete project']);

        // Task permissions
        Permission::create(['name' => 'create task']);
        Permission::create(['name' => 'read task']);
        Permission::create(['name' => 'update task']);
        Permission::create(['name' => 'delete task']);

        // Comment permissions
        Permission::create(['name' => 'create comment']);
        Permission::create(['name' => 'read comment']);
        Permission::create(['name' => 'update comment']);
        Permission::create(['name' => 'delete comment']);

        // Client permissions
        Permission::create(['name' => 'create client']);
        Permission::create(['name' => 'read client']);
        Permission::create(['name' => 'update client']);
        Permission::create(['name' => 'delete client']);

        // Setup roles
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'manager']);
        $role->givePermissionTo([
            'create project',
            'read project',
            'update project',
            'delete project',
            'create task',
            'read task',
            'update task',
            'delete task',
            'create comment',
            'read comment',
            'update comment',
            'delete comment',
            'create client',
            'read client',
            'update client',
            'delete client',
        ]);

        $role = Role::create(['name' => 'developer']);
        $role->givePermissionTo([
            'read project',
            'create task',
            'read task',
            'update task',
            'delete task',
            'create comment',
            'read comment',
            'update comment',
            'delete comment',
            'read client',
        ]);

        $role = Role::create(['name' => 'client']);
        $role->givePermissionTo([
            'read project',
            'read task',
            'create comment',
            'read comment',
            'update comment',
            'delete comment',
            'read client',
        ]);

        $role = Role::create(['name' => 'guest']);
        $role->givePermissionTo([
            'read project',
            'read task',
            'read comment',
        ]);

        // Setup default user
        $user = User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@codespaces.com',
            'password' => '$2a$12$5.FAcs6oVQi9bcU6Axydp.nO3QB/.kSoQy3nz9D83ZCjO/ViQYSxa', // password
            'provider' => 'email',
        ]);

        $user->assignRole('administrator');

    }
}
