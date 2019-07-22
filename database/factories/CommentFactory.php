<?php

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(\App\Comment::class, function (Faker $faker) {
    return [
        //
        'body'=>$faker->text,
        'post_id' => function(){
        return Post::all()->random();
        },
        'user_id' => function(){
        return User::all()->random();
        }
    ];
});
