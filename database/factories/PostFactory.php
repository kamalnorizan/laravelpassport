<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence(5),
        'description' => $faker->paragraph(6),
        'user_id'=> rand(1,50)
    ];
});
