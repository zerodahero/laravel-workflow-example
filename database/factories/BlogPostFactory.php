<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        'subject' => $faker->sentence(),
        'body' => $faker->paragraph(),
        'status' => 'draft'
    ];
});
