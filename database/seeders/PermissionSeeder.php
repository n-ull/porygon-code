<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        Permission::create(['name' => 'create drafts']);
        Permission::create(['name' => 'publish drafts']);
        Permission::create(['name' => 'unpublish drafts']);
        Permission::create(['name' => 'delete drafts']);
        Permission::create(['name' => 'manage drafts']);
        Role::create(['name' => 'owner']);

        $role = Role::create(['name' => 'user']);
        $role2 = Role::create(['name' => 'publisher']);

        $role->givePermissionTo('create drafts');
        $role2->givePermissionTo('publish drafts');
        $role2->givePermissionTo('unpublish drafts');
        $role2->givePermissionTo('delete drafts');
        $role2->givePermissionTo('manage drafts'); */
    }
}
