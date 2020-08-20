<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $shops = Shop::pluck('id')->toArray();
    $name = $faker->sentence(2);
    return [
        'brand' => $faker->sentence(1),
        'sku' => Str::random(10),
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'details' => $faker->sentence(50),
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmol tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in',
        'quantity' => $faker->numberBetween(10, 100),
        'price' => $faker->numberBetween(100, 1000),
        'sale_price' => $faker->boolean(50) ? $faker->numberBetween(50, 500) : null,
        'shop_id' => $faker->randomElement($shops),
    ];
});
