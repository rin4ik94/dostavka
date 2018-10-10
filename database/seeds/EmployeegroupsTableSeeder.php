<?php

use Illuminate\Database\Seeder;

class EmployeegroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('employee_groups')->insert(
      	[
      		[
	            'name' => "Direktor",
	            'manager_id' => 1,
         	],
      		[
	            'name' => "Direktor",
	            'manager_id' => 2,
         	],
      ]);
  	}
  }
