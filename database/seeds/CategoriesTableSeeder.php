<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [ //1
                'name_uz' => 'Sabzavot va mevalar',
                'name_ru' => 'Овощи и фрукты',
                'position' => '1',
                'parent_id' => null,
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Sabzavotlar',
                'name_ru' => 'Овощи',
                'position' => '1',
                'parent_id' => '1',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Mevalar',
                'name_ru' => 'Мевалар',
                'position' => '2',
                'parent_id' => '1',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Ko`katlar',
                'name_ru' => 'Зелень',
                'position' => '3',
                'parent_id' => '1',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Quritilgan mevalar/Yong`oqlar',
                'name_ru' => 'Сухофрукты/Орехи',
                'position' => '4',
                'parent_id' => '1',
                'manager_id' => '2',
            ],
            // id = 6
            [
                'name_uz' => 'Suv/Ichimliklar',
                'name_ru' => 'Вода/Напитки',
                'position' => '2',
                'parent_id' => null,
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Gazlangan ichimliklar',
                'name_ru' => 'Газированные напитки',
                'position' => '1',
                'parent_id' => '6',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Sharbatlar',
                'name_ru' => 'Соки',
                'position' => '2',
                'parent_id' => '6',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Suv',
                'name_ru' => 'Вода',
                'position' => '3',
                'parent_id' => '6',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Salqin ichimliklar',
                'name_ru' => 'Прохладительные напитки',
                'position' => '4',
                'parent_id' => '6',
                'manager_id' => '2',
            ],
            // id = 11
            [
                'name_uz' => '',
                'name_ru' => 'Яйца / Молоко и молочные изделия',
                'position' => '3',
                'parent_id' => null,
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Sut/Sut kokteyllari',
                'name_ru' => 'Молоко/Молочные коктейли',
                'position' => '1',
                'parent_id' => '11',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Qaymoq/Slivki',
                'name_ru' => 'Каймак/Сливки',
                'position' => '2',
                'parent_id' => '11',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Smetana',
                'name_ru' => 'Сметана',
                'position' => '3',
                'parent_id' => '11',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Tuxumlar',
                'name_ru' => 'Яйца',
                'position' => '4',
                'parent_id' => '11',
                'manager_id' => '2',
            ],
            // id = 16
            [
                'name_uz' => 'Go`sht va go`sht mahsulotlari',
                'name_ru' => 'Говядина/Колбасные изделия',
                'position' => '4',
                'parent_id' => null,
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Mol go`shti',
                'name_ru' => 'Говядина',
                'position' => '1',
                'parent_id' => '16',
                'manager_id' => '2',
            ],
            [
                'name_uz' => 'Kolbasa mahsulotlari',
                'name_ru' => 'Колбасные изделия',
                'position' => '2',
                'parent_id' => '16',
                'manager_id' => '2',
            ],
            // metro
            // id  = 19
            [
                'name_uz' => 'Sabzavot va mevalar',
                'name_ru' => 'Овощи и фрукты',
                'position' => '1',
                'parent_id' => null,
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Sabzavotlar',
                'name_ru' => 'Овощи',
                'position' => '1',
                'parent_id' => '19',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Mevalar',
                'name_ru' => 'Мевалар',
                'position' => '2',
                'parent_id' => '19',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Ko`katlar',
                'name_ru' => 'Зелень',
                'position' => '3',
                'parent_id' => '19',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Quritilgan mevalar/Yong`oqlar',
                'name_ru' => 'Сухофрукты/Орехи',
                'position' => '4',
                'parent_id' => '19',
                'manager_id' => '5',
            ],
            // id = 24
            [
                'name_uz' => 'Suv/Ichimliklar',
                'name_ru' => 'Вода/Напитки',
                'position' => '2',
                'parent_id' => null,
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Gazlangan ichimliklar',
                'name_ru' => 'Газированные напитки',
                'position' => '2',
                'parent_id' => '24',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Sharbatlar',
                'name_ru' => 'Соки',
                'position' => '2',
                'parent_id' => '24',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Suv',
                'name_ru' => 'Вода',
                'position' => '3',
                'parent_id' => '24',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Salqin ichimliklar',
                'name_ru' => 'Прохладительные напитки',
                'position' => '4',
                'parent_id' => '24',
                'manager_id' => '5',
            ],
            // 29
            [
                'name_uz' => 'Яйца / Молоко и молочные изделия',
                'name_ru' => 'Яйца / Молоко и молочные изделия',
                'position' => '3',
                'parent_id' => null,
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Sut/Sut kokteyllari',
                'name_ru' => 'Молоко/Молочные коктейли',
                'position' => '1',
                'parent_id' => '29',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Qaymoq/Slivki',
                'name_ru' => 'Каймак/Сливки',
                'position' => '2',
                'parent_id' => '29',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Smetana',
                'name_ru' => 'Сметана',
                'position' => '3',
                'parent_id' => '29',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Tuxumlar',
                'name_ru' => 'Яйца',
                'position' => '4',
                'parent_id' => '29',
                'manager_id' => '5',
            ],
            // 34
            [
                'name_uz' => 'Go`sht va go`sht mahsulotlari',
                'name_ru' => 'Говядина/Колбасные изделия',
                'position' => '4',
                'parent_id' => null,
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Mol go`shti',
                'name_ru' => 'Говядина',
                'position' => '1',
                'parent_id' => '34',
                'manager_id' => '5',
            ],
            [
                'name_uz' => 'Kolbasa mahsulotlari',
                'name_ru' => 'Колбасные изделия',
                'position' => '2',
                'parent_id' => '34',
                'manager_id' => '5',
            ],
            // Пятёрочка 
            // id = 37
            [
                'name_uz' => 'Sabzavot va mevalar',
                'name_ru' => 'Овощи и фрукты',
                'position' => '1',
                'parent_id' => null,
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Sabzavotlar',
                'name_ru' => 'Овощи',
                'position' => '1',
                'parent_id' => '37',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Mevalar',
                'name_ru' => 'Мевалар',
                'position' => '2',
                'parent_id' => '37',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Ko`katlar',
                'name_ru' => 'Зелень',
                'position' => '3',
                'parent_id' => '37',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Quritilgan mevalar/Yong`oqlar',
                'name_ru' => 'Сухофрукты/Орехи',
                'position' => '4',
                'parent_id' => '37',
                'manager_id' => '6',
            ],
            // 42
            [
                'name_uz' => 'Suv/Ichimliklar',
                'name_ru' => 'Вода/Напитки',
                'position' => '2',
                'parent_id' => null,
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Gazlangan ichimliklar',
                'name_ru' => 'Газированные напитки',
                'position' => '2',
                'parent_id' => '42',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Sharbatlar',
                'name_ru' => 'Соки',
                'position' => '2',
                'parent_id' => '42',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Suv',
                'name_ru' => 'Вода',
                'position' => '3',
                'parent_id' => '42',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Salqin ichimliklar',
                'name_ru' => 'Прохладительные напитки',
                'position' => '4',
                'parent_id' => '42',
                'manager_id' => '6',
            ],
            // 47
            [
                'name_uz' => 'Яйца / Молоко и молочные изделия',
                'name_ru' => 'Яйца / Молоко и молочные изделия',
                'position' => '3',
                'parent_id' => null,
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Sut/Sut kokteyllari',
                'name_ru' => 'Молоко/Молочные коктейли',
                'position' => '1',
                'parent_id' => '47',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Qaymoq/Slivki',
                'name_ru' => 'Каймак/Сливки',
                'position' => '2',
                'parent_id' => '47',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Smetana',
                'name_ru' => 'Сметана',
                'position' => '3',
                'parent_id' => '47',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Tuxumlar',
                'name_ru' => 'Яйца',
                'position' => '4',
                'parent_id' => '47',
                'manager_id' => '6',
            ],
            // 52
            [
                'name_uz' => 'Go`sht va go`sht mahsulotlari',
                'name_ru' => 'Говядина/Колбасные изделия',
                'position' => '4',
                'parent_id' => null,
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Mol go`shti',
                'name_ru' => 'Говядина',
                'position' => '1',
                'parent_id' => '52',
                'manager_id' => '6',
            ],
            [
                'name_uz' => 'Kolbasa mahsulotlari',
                'name_ru' => 'Колбасные изделия',
                'position' => '2',
                'parent_id' => '52',
                'manager_id' => '6',
            ],
            // Перекресток 
            // id = 55
            [
                'name_uz' => 'Sabzavot va mevalar',
                'name_ru' => 'Овощи и фрукты',
                'position' => '1',
                'parent_id' => null,
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Sabzavotlar',
                'name_ru' => 'Овощи',
                'position' => '1',
                'parent_id' => '55',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Mevalar',
                'name_ru' => 'Мевалар',
                'position' => '2',
                'parent_id' => '55',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Ko`katlar',
                'name_ru' => 'Зелень',
                'position' => '3',
                'parent_id' => '55',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Quritilgan mevalar/Yong`oqlar',
                'name_ru' => 'Сухофрукты/Орехи',
                'position' => '4',
                'parent_id' => '55',
                'manager_id' => '7',
            ],
            // 60
            [
                'name_uz' => 'Suv/Ichimliklar',
                'name_ru' => 'Вода/Напитки',
                'position' => '2',
                'parent_id' => null,
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Gazlangan ichimliklar',
                'name_ru' => 'Газированные напитки',
                'position' => '2',
                'parent_id' => '60',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Sharbatlar',
                'name_ru' => 'Соки',
                'position' => '2',
                'parent_id' => '60',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Suv',
                'name_ru' => 'Вода',
                'position' => '3',
                'parent_id' => '60',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Salqin ichimliklar',
                'name_ru' => 'Прохладительные напитки',
                'position' => '4',
                'parent_id' => '60',
                'manager_id' => '7',
            ],
            // 65
            [
                'name_uz' => 'Яйца / Молоко и молочные изделия',
                'name_ru' => 'Яйца / Молоко и молочные изделия',
                'position' => '3',
                'parent_id' => null,
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Sut/Sut kokteyllari',
                'name_ru' => 'Молоко/Молочные коктейли',
                'position' => '1',
                'parent_id' => '65',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Qaymoq/Slivki',
                'name_ru' => 'Каймак/Сливки',
                'position' => '2',
                'parent_id' => '65',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Smetana',
                'name_ru' => 'Сметана',
                'position' => '3',
                'parent_id' => '65',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Tuxumlar',
                'name_ru' => 'Яйца',
                'position' => '4',
                'parent_id' => '65',
                'manager_id' => '7',
            ],
            // 70
            [
                'name_uz' => 'Go`sht va go`sht mahsulotlari',
                'name_ru' => 'Говядина/Колбасные изделия',
                'position' => '4',
                'parent_id' => null,
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Mol go`shti',
                'name_ru' => 'Говядина',
                'position' => '1',
                'parent_id' => '70',
                'manager_id' => '7',
            ],
            [
                'name_uz' => 'Kolbasa mahsulotlari',
                'name_ru' => 'Колбасные изделия',
                'position' => '2',
                'parent_id' => '70',
                'manager_id' => '7',
            ],
                // ishonch 
                // id = 73
            [
                'name_uz' => 'Оборудование',
                'name_ru' => 'Оборудование',
                'position' => '1',
                'parent_id' => null,
                'manager_id' => '1',
            ],
            [
                'name_uz' => 'Тюнер',
                'name_ru' => 'Тюнер',
                'position' => '1',
                'parent_id' => '73',
                'manager_id' => '1',
            ],
            [
                'name_uz' => 'Телекарта',
                'name_ru' => 'Телекарта',
                'position' => '2',
                'parent_id' => '73',
                'manager_id' => '1',
            ],
            [
                'name_uz' => 'Антенна',
                'name_ru' => 'Антенна',
                'position' => '3',
                'parent_id' => '73',
                'manager_id' => '1',
            ],
            // 77
            [
                'name_uz' => 'Телевизоры, Hi-Fi и видео',
                'name_ru' => 'Телевизоры, Hi-Fi и видео',
                'position' => '2',
                'parent_id' => null,
                'manager_id' => '1',
            ],
            // 78
            [
                'name_uz' => 'Телефоны и планшеты',
                'name_ru' => 'Телефоны и планшеты',
                'position' => '3',
                'parent_id' => null,
                'manager_id' => '1',
            ],
            // 79
            [
                'name_uz' => 'Фото и видео',
                'name_ru' => 'Фото и видео',
                'position' => '4',
                'parent_id' => null,
                'manager_id' => '1',
            ],
            // 80
            [
                'name_uz' => 'Аудио техника',
                'name_ru' => 'Аудио техника',
                'position' => '5',
                'parent_id' => null,
                'manager_id' => '1',
            ],
            // 81
            [
                'name_uz' => 'Техника для кухни',
                'name_ru' => 'Техника для кухни',
                'position' => '6',
                'parent_id' => null,
                'manager_id' => '1',
            ],
            // 82
            [
                'name_uz' => 'Техника для дома',
                'name_ru' => 'Техника для дома',
                'position' => '7',
                'parent_id' => null,
                'manager_id' => '1',
            ],
            // 83
            [
                'name_uz' => 'Ноутбуки, моноблоки, игровые приставки',
                'name_ru' => 'Ноутбуки, моноблоки, игровые приставки',
                'position' => '8',
                'parent_id' => null,
                'manager_id' => '1',
            ],
            // Ашан 
            // id = 84
            [
                'name_uz' => 'Оборудование',
                'name_ru' => 'Оборудование',
                'position' => '1',
                'parent_id' => null,
                'manager_id' => '8',
            ],
            [
                'name_uz' => 'Тюнер',
                'name_ru' => 'Тюнер',
                'position' => '1',
                'parent_id' => '84',
                'manager_id' => '8',
            ],
            [
                'name_uz' => 'Телекарта',
                'name_ru' => 'Телекарта',
                'position' => '2',
                'parent_id' => '84',
                'manager_id' => '8',
            ],
            [
                'name_uz' => 'Антенна',
                'name_ru' => 'Антенна',
                'position' => '3',
                'parent_id' => '84',
                'manager_id' => '8',
            ],
            // 88
            [
                'name_uz' => 'Телевизоры, Hi-Fi и видео',
                'name_ru' => 'Телевизоры, Hi-Fi и видео',
                'position' => '2',
                'parent_id' => null,
                'manager_id' => '8',
            ],
            // 89
            [
                'name_uz' => 'Телефоны и планшеты',
                'name_ru' => 'Телефоны и планшеты',
                'position' => '3',
                'parent_id' => null,
                'manager_id' => '8',
            ],
            // 90
            [
                'name_uz' => 'Фото и видео',
                'name_ru' => 'Фото и видео',
                'position' => '4',
                'parent_id' => null,
                'manager_id' => '8',
            ],
            // 91
            [
                'name_uz' => 'Аудио техника',
                'name_ru' => 'Аудио техника',
                'position' => '5',
                'parent_id' => null,
                'manager_id' => '8',
            ],
            // 92
            [
                'name_uz' => 'Техника для кухни',
                'name_ru' => 'Техника для кухни',
                'position' => '6',
                'parent_id' => null,
                'manager_id' => '8',
            ],
            // 93
            [
                'name_uz' => 'Техника для дома',
                'name_ru' => 'Техника для дома',
                'position' => '7',
                'parent_id' => null,
                'manager_id' => '8',
            ],
            // 94
            [
                'name_uz' => 'Ноутбуки, моноблоки, игровые приставки',
                'name_ru' => 'Ноутбуки, моноблоки, игровые приставки',
                'position' => '8',
                'parent_id' => null,
                'manager_id' => '8',
            ],
            // Дикси 
            // id = 95
            [
                'name_uz' => 'Оборудование',
                'name_ru' => 'Оборудование',
                'position' => '1',
                'parent_id' => null,
                'manager_id' => '4',
            ],
            [
                'name_uz' => 'Тюнер',
                'name_ru' => 'Тюнер',
                'position' => '1',
                'parent_id' => '95',
                'manager_id' => '4',
            ],
            [
                'name_uz' => 'Телекарта',
                'name_ru' => 'Телекарта',
                'position' => '2',
                'parent_id' => '95',
                'manager_id' => '4',
            ],
            [
                'name_uz' => 'Антенна',
                'name_ru' => 'Антенна',
                'position' => '3',
                'parent_id' => '95',
                'manager_id' => '4',
            ],
            // 99
            [
                'name_uz' => 'Телевизоры, Hi-Fi и видео',
                'name_ru' => 'Телевизоры, Hi-Fi и видео',
                'position' => '2',
                'parent_id' => null,
                'manager_id' => '4',
            ],
            [
                'name_uz' => 'Телефоны и планшеты',
                'name_ru' => 'Телефоны и планшеты',
                'position' => '3',
                'parent_id' => null,
                'manager_id' => '4',
            ],
            [
                'name_uz' => 'Фото и видео',
                'name_ru' => 'Фото и видео',
                'position' => '4',
                'parent_id' => null,
                'manager_id' => '4',
            ],
            [
                'name_uz' => 'Аудио техника',
                'name_ru' => 'Аудио техника',
                'position' => '5',
                'parent_id' => null,
                'manager_id' => '4',
            ],
            [
                'name_uz' => 'Техника для кухни',
                'name_ru' => 'Техника для кухни',
                'position' => '6',
                'parent_id' => null,
                'manager_id' => '4',
            ],
            [
                'name_uz' => 'Техника для дома',
                'name_ru' => 'Техника для дома',
                'position' => '7',
                'parent_id' => null,
                'manager_id' => '4',
            ],
            [
                'name_uz' => 'Ноутбуки, моноблоки, игровые приставки',
                'name_ru' => 'Ноутбуки, моноблоки, игровые приставки',
                'position' => '8',
                'parent_id' => null,
                'manager_id' => '4',
            ],
            // Euro Spar 
            // id = 106
            [
                'name_uz' => 'Пакеты телеканалов',
                'name_ru' => 'Пакеты телеканалов',
                'position' => '1',
                'parent_id' => null,
                'manager_id' => '3',
            ],
            [
                'name_uz' => 'Эконом',
                'name_ru' => 'Эконом',
                'position' => '1',
                'parent_id' => '106',
                'manager_id' => '3',
            ],
            [
                'name_uz' => 'Стандарт',
                'name_ru' => 'Стандарт',
                'position' => '2',
                'parent_id' => '106',
                'manager_id' => '3',
            ],
            [
                'name_uz' => 'Микс',
                'name_ru' => 'Микс',
                'position' => '3',
                'parent_id' => '106',
                'manager_id' => '3',
            ],
        ])->each(function ($cat) {
            $category = factory(Category::class)->create([
                'name_uz' => $cat['name_uz'],
                'name_ru' => $cat['name_ru'],
                'position' => $cat['position'],
                'parent_id' => $cat['parent_id'],
                'manager_id' => $cat['manager_id']
            ]);
            factory(Product::class, 5)->create([
                'manager_id' => $category->manager_id,
                'category_id' => $category->id,
            ]);
        });
    }
}
