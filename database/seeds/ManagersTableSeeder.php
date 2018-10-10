<?php

use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	  {
	      DB::table('managers')->insert(
	      	[
	      		[
		            'name' => "Ishonch",
		            'logo' => "ishonch_5b9125202acdf.jpg",
		            'status' => 1,
		            'manager_category_id'=> 1,
	              'created_at' =>  new DateTime,
		            'updated_at' => new DateTime,
	        	],
	      		[
		            'name' => "Makro",
		            'logo' => "logo_makro_5b9124f5c9106.jpg",
		            'status' => 1,
		            'manager_category_id'=> 2,
	              'created_at' =>  new DateTime,
		            'updated_at' => new DateTime,
	        	],	
	      ]);
	  	}
}
