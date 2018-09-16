<?php

use Faker\Generator as Faker;
use App\Client;
$factory->define(Client::class, function (Faker $faker) {

 $faker->locale = 'es_ES';

    return [
      'first_name' => $faker->firstName,
      'last_name' => $faker->lastName,
      'phone' => $faker->e164PhoneNumber,
      'email' => $faker->unique()->safeEmail,
      'address' => $faker->unique()->address,
    ];
});
