<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    $user_ids=\App\Models\User::all()->pluck('id')->toArray();
    $categroy_ids=\App\Models\Category::all()->pluck('id')->toArray();
    // 随机取一个月以内的时间
    $updated_at = $faker->dateTimeThisMonth();
    // 传参为生成最大时间不超过，创建时间永远比更改时间要早
    $created_at = $faker->dateTimeThisMonth($updated_at);
    return [
        'title'=>$faker->realText(30),
        'body'=>$faker->realText(500),
        'user_id'       => $faker->randomElement($user_ids),
        'category_id'   => $faker->randomElement($categroy_ids),
        'created_at'=> $created_at,
        'updated_at'    => $updated_at
    ];
});
