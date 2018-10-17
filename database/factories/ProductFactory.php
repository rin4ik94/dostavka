<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name_uz' => $faker->name,
        'name_ru' => $faker->name,
        'image' => $faker->randomElement(['ananas_5bbcf4b89fa9b.jpg', 'fanta_5bae32f9da6d6.jpg','apples_5bae31a6e3178.jpg','banana_5bae2f16c3ba9.jpg']),
        'measurement' => $faker->randomElement(['1', '2', '3','4']),
        'new_price' => rand(5000, 25000),
        'category_id' => App\Models\Category::all()->random()->id,
        'manager_id' => App\Models\Manager::all()->random()->id,
        'status' => 1
    ];
});
