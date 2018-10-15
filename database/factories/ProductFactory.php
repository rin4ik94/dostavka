<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name_uz' => $faker->name,
        'name_ru' => $faker->name,
        'status' => 1,
        'new_price' => rand(5000, 25000)
    ];
});
