<?php

use App\User;
use App\Products_model;
use Faker\Generator as Faker;

$factory->define(App\replies::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'product_id' => function(){
            return Products_model::all()->random();

        },
        'user_id' =>  function(){
            return User::all()->random();
        }

    ];
});
