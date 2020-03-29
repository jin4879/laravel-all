<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model\Board::class, function (Faker $faker) {
    $timestamp = mt_rand(1, time());
    return [
        'user_id' => $faker->randomElement(Model\User::all()->pluck('id')),
        'title' => $faker->sentence(5),
        'content' => $faker->paragraph(4),
        'view_count' => $faker->randomNumber(3),
        'updated_at' => date("Y-m-d H:i:s", $timestamp),
        'created_at' => date("Y-m-d H:i:s", $timestamp),
    ];
});
