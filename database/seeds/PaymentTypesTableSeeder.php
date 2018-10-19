<?php

use Illuminate\Database\Seeder;

class PaymentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_types')->insert(
            [
                [
                    'name_uz' => "Naqd pulda",
                    'name_ru' => "Наличными",
                ],
                [
                    'name_uz' => "Bank kartasi",
                    'name_ru' => "Банковская карта",
                ],
            ]
        );
    }
}
