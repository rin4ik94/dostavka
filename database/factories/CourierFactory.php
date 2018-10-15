<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Courier::class, function (Faker $faker) {
    return [
        'fio' => $faker->name,
        'mobile' => '991234'.rand(100,999),
        'password' => str_random(5),
        'status' => rand(0, 1),
        'created_at' => Carbon::today()->toDateString(),
        'updated_at' => Carbon::today()->toDateString(),
    ];
});
