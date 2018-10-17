<?php

use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert(
			[
				[
					'name' => "Ishonch",
                    'manager_id' => '1',
                    'region_id' => '1',
                    'address' => 'Buyuk Ipak Yo`li 101-uy',
                    'status' => 1,
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
                    'name' => "Makro",
                    'manager_id' => '2',
                    'region_id' => '12',
                    'address' => 'Farg`ona Sh, Yuksalish ko`chasi 100-uy',
                    'status' => 1,
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
                ],
                [
                    'name' => "Makro",
                    'manager_id' => '2',
                    'region_id' => '12',
                    'address' => 'Toshloq tumani, Eski shahar ko`chasi 100-uy',
                    'status' => 1,
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
                [
                    'name' => "Makro",
                    'manager_id' => '2',
                    'region_id' => '12',
                    'address' => 'Marg`ilon Sh, Marg`ilnsoy ko`chasi 100-uy',
                    'status' => 1,
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name' => "Euro Spar",
                    'manager_id' => '3',
                    'region_id' => '1',
					'status' => 1,
					'address' => 'Toshkent Sh, Archa kochasi 100-uy',
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name' => "Дикси",
					'manager_id' => '4',
                    'region_id' => '12',
                    'status' => 1,
                    'address' => 'Bozor yo`li 10-uy',
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name' => "Metro",
					'manager_id' => '5',
                    'region_id' => '1',
                    'status' => 1,
                    'address' => 'Kichik xalqa, 25-uy',
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name' => "Пятёрочка",
					'manager_id' => '6',
                    'region_id' => '1',
                    'status' => 1,
                    'address' => 'Qo`shtepa bozorchasi 12-uy',
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name' => "Перекресток",
					'manager_id' => '7',
                    'region_id' => '1',
                    'status' => 1,
                    'address' => 'Chilonzor metro',
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
				[
					'name' => "Ашан",
					'manager_id' => '8',
                    'region_id' => '2',
                    'status' => 1,
                    'address' => 'Qoraqamish 23-uy',
					'created_at' => new DateTime,
					'updated_at' => new DateTime,
				],
			]
		);
    }
}
