<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Products_model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
            'id' => $faker->randomDigit,
            'products_id' => function (){
                return Products_model::all()->random();
            },
            'sku' => $faker->randomDigit,
            'size' => $faker->randomDigit,
            'price' => $faker->randomDigit,
            'stock' => $faker->randomDigit,



    ];
});
