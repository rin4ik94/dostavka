<?php

use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert(
            [
                [
                    'name' => "Новый",
                    'color' => "btn-info",
                ],
                [
                    'name' => "Формируется",
                    'color' => "btn-secondary",
                ],
                [
                    'name' => "В пути",
                    'color' => "btn-warning",
                ],
                [
                    'name' => "Доставлен",
                    'color' => "btn-success",
                ],
                [
                    'name' => "Отменен",
                    'color' => "btn-danger",
                ],
            ]
        );
        
    }
}
