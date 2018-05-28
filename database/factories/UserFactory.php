<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

    //Product Factories
$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product_name' 	=> $faker->name,
        'product_img' 	=> $faker->imageUrl($width = 640, $height = 480),
        'product_desc'	=> $faker->paragraph(10),
        'category_id' => function () {
            return factory(App\Category::class)->create()->id;
        },
        'brand_id' => function () {
            return factory(App\Brand::class)->create()->id;
        },
        'product_price'	=> $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 2000),
        'product_color'	=> $faker->colorName, 
    ];

});

$factory->define(App\Slider::class, function (Faker $faker) {
    return [
        'slider_name'  => $faker->name,
        'slider_desc'  => $faker->paragraph(8),
        'slider_img'   => $faker->imageUrl($width = 444, $height = 486),   
        'slider_button' => $faker->word, 
    ];

});
