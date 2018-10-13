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
					'name_uz' => "Supermarketlar",
					'name_ru' => "Супермаркеты",
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name_uz' => "Kosmetika",
					'name_ru' => "Косметика",
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name_uz' => "Spirtli ichimlik do'konlari",
					'name_ru' => "Алкагольные магазины",
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name_uz' => "Xo'jalik mollari",
					'name_ru' => "Битовая техника",
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
			]
		);
	}
}
