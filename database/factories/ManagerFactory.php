<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Manager::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'status' => 1,
        'manager_category_id' => rand(1, 5)
    ];
});
