<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin: user access
        Role::find(1)->permissions()->attach(1);
        //user: ... access
        //Role::find(2)->permissions()->attach([1, 2]);

    }
}