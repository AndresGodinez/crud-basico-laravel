<?php

use Faker\Generator as Faker;
use App\Product;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Product::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'short' => $faker->text,
		'body' => $faker->text,
		'phone' => $faker->phoneNumber,
    ];
});
