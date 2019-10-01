<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'author' => $faker->firstName . ' ' . $faker->lastName,
        'description' => $faker->text,
        'featured' => $faker->randomElement([1,0]),
        'category_id' => \App\Category::all()->random(1)->pluck('id')->first()
    ];
});
