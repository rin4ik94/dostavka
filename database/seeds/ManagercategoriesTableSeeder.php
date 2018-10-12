<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagercategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('manager_categories')->insert(
			[
				[
					'name_uz' => "Superadmin",
					'name_ru' => "Суперадмин",
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name_uz' => "Supermarketlar",
					'name_ru' => "Супермаркеты",
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name_uz' => "Alkomarketlar",
					'name_ru' => "Алкомаркеты",
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
			]
		);
	}
}
