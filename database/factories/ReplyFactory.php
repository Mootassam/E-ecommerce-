<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Reply;
use App\Model;
use App\Product;

use Faker\Generator as Faker;

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
       'body'=>$faker->text,
       'product_id'=>function(){
           return Product::all()->random();
       },
       'user_id' => $faker->randomDigit()
    ];
});
