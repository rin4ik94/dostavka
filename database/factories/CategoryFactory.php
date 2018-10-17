<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name_uz' => $faker->name,
        'name_ru' => $faker->name,
        'position' => rand(1, 100)
    ];
});
