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
                    'color' => "#007bff",
                ],
                [
                    'name' => "Формируется",
                    'color' => "#6c757d",
                ],
                [
                    'name' => "В пути",
                    'color' => "#ffc107",
                ],
                [
                    'name' => "Доставлен",
                    'color' => "#28a745",
                ],
                [
                    'name' => "Отменен",
                    'color' => "#e84c3d",
                ],
            ]
        );
        
    }
}
