<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Admin']);
        $role1 = Role::create(['name' => 'User']);
        Permission::create(['name' => 'memorias.index'])->syncRoles([$role, $role1]);
        Permission::create(['name' => 'memorias.show'])->syncRoles([$role, $role1]);
        Permission::create(['name' => 'admin.files'])->syncRoles([$role]);
        Permission::create(['name' => 'admin.create'])->syncRoles([$role]);
    }
}
