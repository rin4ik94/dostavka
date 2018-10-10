<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      DB::table('employees')->insert(
      	[
      		[
	            'name' => "Ishonch",
	            'mobile' => "991231212",
	            'password' => '$2y$10$EfK8K5J1q5iVilIVDB4IuuDz99/YOJezXXC2wGulF0lSJp9OLYdXi',
	            'status' => 1,
              'manager_id'=> 1,
              'role_id' => 1,
              'created_at' =>  new DateTime,
	            'updated_at' => new DateTime,
        	],
      		[
	            'name' => "Makro",
	            'mobile' => "991231111",
	            'password' => '$2y$10$EfK8K5J1q5iVilIVDB4IuuDz99/YOJezXXC2wGulF0lSJp9OLYdXi',
	            'status' => 1,
	            'manager_id'=> 2,
              'role_id' => 2,
              'created_at' =>  new DateTime,
	            'updated_at' => new DateTime,
        	],	
      ]);
  	}
}