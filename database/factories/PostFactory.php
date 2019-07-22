<?php

use App\Admin;
use App\Tag;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

    return [
        //
        'title' => $faker->sentence,
        'body'=> $faker->text,
        'admin_id'=>function(){
        return Admin::all()->random();
        }

    ];
});
