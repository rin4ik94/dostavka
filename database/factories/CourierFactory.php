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

$factory->define(App\Courier::class, function (Faker $faker) {
    return [
        'fio' => $faker->name,
        'phone' => '991234567',
        'status' => rand(0, 1),
        'date_birth' => Carbon::today()->toDateString(),
        'date_adoption' => Carbon::today()->toDateString(),
    ];
});
