<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role' => $faker->word,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence,
        'type' => $faker->word,
        'description' => $faker->text,
        'status' => $faker->boolean,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
    ];
});

$factory->define(App\Item::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence,
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        'description' => $faker->text,
        'status' => $faker->boolean,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
        'meun_id' => $faker->numberBetween($min = 3, $max = 50),
    ];
});

$factory->define(App\Meal::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence,
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        'description' => $faker->text,
        'status' => $faker->boolean,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'user_id' => $faker->numberBetween($min = 1, $max = 50),
    ];
});

$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'password' => $password ?: $password = bcrypt('secret'),
        'city' => $faker->city,
        'phone' => $faker->e164PhoneNumber,
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'total' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        'status' => $faker->boolean,
        'cashIn' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        'payment' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        'change' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 10, $max = 100),
        //'customer_id' => $faker->numberBetween($min = 2, $max = 100),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence,
        'description' => $faker->text,
        'status' => $faker->boolean,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'order_id' => $faker->numberBetween($min = 1, $max = 50),
        'customer_id' => $faker->numberBetween($min = 1, $max = 50),
        'rate' => $faker->numberBetween($min = 1, $max = 5),
    ];
});

$factory->define(App\MealItem::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'discount' => $faker->numberBetween($min = 1, $max = 100),
        'meal_id'  => $faker->numberBetween($min = 1, $max = 50),
        'item_id'  => $faker->numberBetween($min = 3, $max = 50),

    ];
});

$factory->define(App\OrderItme::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'item_id'  => $faker->numberBetween($min = 3, $max = 50),
        'order_id'  => $faker->numberBetween($min = 1, $max = 50),

    ];
});

$factory->define(App\OrderMeal::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'meal_id'  => $faker->numberBetween($min = 1, $max = 50),
        'order_id'  => $faker->numberBetween($min = 1, $max = 50),

    ];
});

$factory->define(App\OrderUser::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'user_id'  => $faker->numberBetween($min = 1, $max = 50),
        'order_id'  => $faker->numberBetween($min = 3, $max = 50),
        'type' => $faker->word,

    ];
});
