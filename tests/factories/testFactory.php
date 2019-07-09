<?php
use Faker\Generator as Faker;

$factory->define('test-factory', function(Faker $faker) {

    $email = $faker->email;

    return [
        'name' => $faker->name,
        'email' => $email,
        'email_confirmation' => $email,
        'phone' => $faker->phoneNumber,
        'message' => $faker->paragraph(),
    ];
});