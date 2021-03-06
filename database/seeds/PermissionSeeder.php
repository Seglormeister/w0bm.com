<?php

use Illuminate\Database\Seeder;
use \Toddish\Verify\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'delete_user']);
        Permission::create(['name' => 'delete_video']);
        Permission::create(['name' => 'delete_category']);
        Permission::create(['name' => 'edit_user']);
        Permission::create(['name' => 'edit_video']);
        Permission::create(['name' => 'edit_category']);
        Permission::create(['name' => 'add_category']);
    }
}
