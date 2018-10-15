<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientgroupsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('client_groups')->insert([
			[
				'name' => 'Обычный',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			],
			[
				'name' => 'Постоянный',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			],
			[
				'name' => 'Одноклассники',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			],
			[
				'name' => 'Партнеры',
				'created_at' => new DateTime,
				'updated_at' => new DateTime,
			],
		]);
	}
}