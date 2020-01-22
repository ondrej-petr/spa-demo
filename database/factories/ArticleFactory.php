<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\Category;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->sentence;

    return [
        'title' => $title,
        'url' => Str::slug($title),
        'content' => $faker->text,
        'category_id' => function() {
            return Category::all()->random();
        },
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});
