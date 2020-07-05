<?php

use App\User;
use App\Reply;
use App\replies;
use App\Products_model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Factory(User::Class,10)->create();
        Factory(Products_model::Class,10)->create();

    }
}
