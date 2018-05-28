<?php

use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
    return [
        'brand_name' => $faker->word,
        'brand_desc' => $faker->sentence,	

    ];
});
