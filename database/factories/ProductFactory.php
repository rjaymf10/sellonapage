<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $shops = Shop::pluck('id')->toArray();
    return [
        'name' => $faker->sentence(2),
        'description' => $faker->sentence(20),
        'price' => $faker->numberBetween(100, 1000),
        'shop_id' => $faker->randomElement($shops),
    ];
});
