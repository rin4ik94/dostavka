<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');
        $role = Role::create([
            'name' => 'Superadmin',
            'manager_id' => 1,
            'guard_name' => 'admin',
        ]);
        $role->givePermissionTo(Permission::all());
    }
}
