<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Like;
use Faker\Generator as Faker;

$factory->define(Like::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(App\Model\User::all()->pluck('id')),
        'board_id' => $faker->randomElement(App\Model\Board::all()->pluck('id')),
    ];
});
