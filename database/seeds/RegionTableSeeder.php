<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('regions')->insert([
          [
          'name_uz' => 'Toshkent shahri',
          'name_ru' => 'Город Ташкент',
          ],
          [
          'name_uz' => 'Toshkent viloyati',
          'name_ru' => 'Ташкентская область',
          ],
          [
          'name_uz' => 'Andijon viloyati',
          'name_ru' => 'Андижанская область',
          ],
          [
          'name_uz' => 'Buxoro viloyati',
          'name_ru' => 'Бухарская область',
          ],
          [
          'name_uz' => 'Guliston viloyati',
          'name_ru' => 'Гулистанская область',
          ],
          [
          'name_uz' => 'Jizzax viloyati',
          'name_ru' => 'Джизакская область',
          ],
          [
          'name_uz' => 'Navoiy viloyati',
          'name_ru' => 'Навоийская область',
          ],
          [
          'name_uz' => 'Namangan viloyati',
          'name_ru' => 'Наманганская область',
          ],
          [
          'name_uz' => 'Nukus viloyati',
          'name_ru' => 'Нукусская область',
          ],
          [
          'name_uz' => 'Samarqand viloyati',
          'name_ru' => 'Самаркандская область',
          ],
          [
          'name_uz' => 'Surxondaryo viloyati',
          'name_ru' => 'Сурхандарьинская область',
          ],
          [
          'name_uz' => 'Farg`ona viloyati',
          'name_ru' => 'Ферганская область',
          ],
          [
          'name_uz' => 'Xorazm viloyati',
          'name_ru' => 'Хорезмская область',
          ],
          [
          'name_uz' => 'Qashqadaryo viloyati',
          'name_ru' => 'Кашкадарьинская область',
          ],
        ]);
    }
}
