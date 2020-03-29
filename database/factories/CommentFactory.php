<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Comment;
use App\Model\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $timestamp = mt_rand(1, time());
    return [
        'user_id' => $faker->randomElement(User::all()->pluck('id')),
        'board_id' => $faker->randomElement(\App\Model\Board::all()->pluck('id')),
        'pid' => $faker->numberBetween($min = 1, $max = 10),
        'content' => $faker->paragraph(4),
        'updated_at' => date("Y-m-d H:i:s", $timestamp),
        'created_at' => date("Y-m-d H:i:s", $timestamp),
    ];
});
