<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stop;
use Faker\Generator as Faker;
use App\City;
$factory->define(Stop::class, function (Faker $faker) {
    return [
        'name'    => $faker->sentence,
        'city_id' => function(){
            return factory(City::class)->create()->id;
        }
    ];
});
