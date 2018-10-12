<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingModeTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('working_modes')->insert([
			[
				'name_uz' => 'Dushanba',
				'name_ru' => 'Понедельник',
			],
			[
				'name_uz' => 'Seshanba',
				'name_ru' => 'Вторник',
			],
			[
				'name_uz' => 'Chorshanba',
				'name_ru' => 'Среда',
			],
			[
				'name_uz' => 'Payshanba',
				'name_ru' => 'Четверг',
			],
			[
				'name_uz' => 'Juma',
				'name_ru' => 'Пятница',
			],
			[
				'name_uz' => 'Shanba',
				'name_ru' => 'Суббота',
			],
			[
				'name_uz' => 'Yakshanba',
				'name_ru' => 'Воскресенье',
			]
		]);
	}
}
