<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'url' => $faker->url,
        'url_product' => $faker->url,
        'image' => $faker->imageUrl,
        'price' => $faker->randomNumber(5),
        'description' => $faker->text($maxNbChars = 200),
    ];
});
