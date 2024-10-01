<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
// Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

// create permissions
//Permission::create(['name' => 'edit articles']);
//Permission::create(['name' => 'delete articles']);
//Permission::create(['name' => 'publish articles']);
//Permission::create(['name' => 'unpublish articles']);

// create roles and assign created permissions



// or may be done by chaining
//$role = Role::create(['name' => 'moderator'])
//->givePermissionTo(['publish articles', 'unpublish articles']);

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        // Преподаватель
        Role::create(['name' => 'teacher']);
//        $role->givePermissionTo('edit articles');
        // Абитуриент
        Role::create(['name' => 'enrollee']);
        // Родитель
        Role::create(['name' => 'parent']);
//        $user = \App\User::findOrFail(1);
//        $user->assignRole('admin');
    }
}
