<?php

use App\Products_model;
use Faker\Generator as Faker;

$factory->define(App\Products_model::class, function (Faker $faker) {
    return [
        'categories_id' => $faker->randomDigit,
        'p_name'=> $faker->name,
        'p_code'=> $faker->randomDigit,
        'p_color'=> $faker->name,
        'description'=> $faker->text,
        'price'=> $faker->randomDigit,
        'image'=> $faker->name,
    ];
});
