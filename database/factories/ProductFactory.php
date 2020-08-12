<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'        => "Product " . $faker->word,
        'description' => $faker->paragraph(2),
        'price'       => $faker->randomFloat(2, 1, 1000),
        'active'      => $faker->boolean
    ];
});
