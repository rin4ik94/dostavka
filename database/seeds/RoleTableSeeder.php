<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
       	      DB::table('roles')->insert(
	      	[
	      		[
		            'name' => "Superadmin",
		            'manager_id' => 1,
		            'guard_name' => 'web',
		            'created_at' =>  new DateTime,
		            'updated_at' => new DateTime,
	        	],
	      		[
		            'name' => "Direktor",
		            'manager_id' => 1,
		            'guard_name' => 'web',
		            'created_at' =>  new DateTime,
		            'updated_at' => new DateTime,
	        	],
	      ]);
  	}
}
