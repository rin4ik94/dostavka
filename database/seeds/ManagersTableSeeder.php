<?php

use Illuminate\Database\Seeder;
use App\Models\Manager;

class ManagersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		collect(
			[
				[
					'name' => "Ishonch",
					'logo' => "ishonch.jpg",
					'status' => 1,
					'manager_category_id' => 4
				],
				[
					'name' => "Makro",
					'logo' => "makrologo.jpg",
					'status' => 1,
					'manager_category_id' => 1
				],
				[
					'name' => "Euro Spar",
					'logo' => "ret_44.png",
					'status' => 1,
					'manager_category_id' => 3
				],
				[
					'name' => "Дикси",
					'logo' => "ret_10.png",
					'status' => 1,
					'manager_category_id' => 2
				],
				[
					'name' => "Metro",
					'logo' => "ret_18.png",
					'status' => 1,
					'manager_category_id' => 1
				],
				[
					'name' => "Пятёрочка",
					'logo' => "ret_2.png",
					'status' => 1,
					'manager_category_id' => 1
				],
				[
					'name' => "Перекресток",
					'logo' => "ret_3.png",
					'status' => 1,
					'manager_category_id' => 1
				],
				[
					'name' => "Ашан",
					'logo' => "ret_3.png",
					'status' => 1,
					'manager_category_id' => 2
				]
			]
		)->each(function ($manager) {
			factory(Manager::class)->create([
				'name' => $manager['name'],
				'logo' => $manager['logo'],
				'status' => $manager['status'],
				'manager_category_id' => $manager['manager_category_id']
			]);
		});
	}
}
