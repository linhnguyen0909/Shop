<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Phone;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Phone::class, function (Faker $faker) {
    return [
        'id'=>$faker->uuid,
        'number' => $faker->phoneNumber,
        'user_id'=>User::all()->random()->id,
    ];
});
