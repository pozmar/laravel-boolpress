<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\PostModel;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App\PostModel::class, function (Faker $faker) {
    return [
        
        'title'=>$faker->text,
        'description'=>$faker->text

    ];
});
