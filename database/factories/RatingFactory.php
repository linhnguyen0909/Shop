<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use App\Models\Rating;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(Rating::class, function (Faker $faker) {
    return [
        'user_id'=>User::all()->random()->id,
        'book_id'=>Book::all()->random()->id,
    ];
});
