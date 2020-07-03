<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        "product_name" => $faker->word,
        "product_details" => $faker->paragraph,
        "price" => $faker->numberBetween(1000,10000),
        'discount' => $faker->numberBetween(100,500),
        "stock" => $faker->randomDigit,

    ];
});
