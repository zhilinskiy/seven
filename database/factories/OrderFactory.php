<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Order::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        'product_id' => \App\Models\Product::inRandomOrder()->first()->id,
        'order_number' => $faker->randomNumber(),
    ];
});
