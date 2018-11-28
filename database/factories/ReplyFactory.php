<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Reply::class, function (Faker $faker) {
    $user_ids=\App\Models\User::all()->pluck('id')->toArray();
    $post_ids=\App\Models\Post::all()->pluck('id')->toArray();
    return [
        'content'=>$faker->realText(200),
        'user_id'       => $faker->randomElement($user_ids),
        'post_id'   => $faker->randomElement($post_ids),
        'created_at'=> $faker->dateTimeThisMonth(),
        'updated_at'    => $faker->dateTimeThisMonth()
    ];
});
