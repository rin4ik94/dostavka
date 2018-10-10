<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert(
        	[
        		[
        	            'name_ru' => "Менеджеры",
        	            'href' => "managers",
        	            'icon' => "#store",
	        	],	
	        	[
        	            'name_ru' => "Филиали",
        	            'href' => "branchs",
        	            'icon' => "#map-pin",
	        	],
	        	[
        	            'name_ru' => "Категории",
        	            'href' => "categories",
        	            'icon' => "#category",
	        	],	
	        	[
        	            'name_ru' => "Продукты",
        	            'href' => "products",
        	            'icon' => "#product",
	        	],	
	        	[
        	            'name_ru' => "Заказы",
        	            'href' => "order",
        	            'icon' => "#order",
	        	],	
	        	[
        	            'name_ru' => "Отчеты",
        	            'href' => "reports",
        	            'icon' => "#journal",
	        	],	
	        	[
        	            'name_ru' => "Транзакции",
        	            'href' => "orders",
        	            'icon' => "#journal",
	        	],
	        	[
        	            'name_ru' => "Курьеры",
        	            'href' => "couriers",
        	            'icon' => "#courier",
	        	],	
  		    	[
        	            'name_ru' => "Клиенты",
        	            'href' => "clients",
        	            'icon' => "#client",
	        	],
			    	[
        	            'name_ru' => "Сотрудники",
        	            'href' => "employees",
        	            'icon' => "#employee",
	        	],	
			    	[
        	            'name_ru' => "Настройки",
        	            'href' => "settings",
        	            'icon' => "#settings",
	        	],	
        ]);
    }
}
