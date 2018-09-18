<?php

use Faker\Generator as Faker;
use App\Property;
use App\Currency;
use App\Category;
use App\Client;
use App\PropertyType;

$factory->define(Property::class, function (Faker $faker) {
   $faker->locale = 'es_ES';
   $propertyTypes = PropertyType::all()->pluck('id')->toArray();
   $currencies = Currency::all()->pluck('id')->toArray();


    return [
          'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
           'property_type_id' => $faker->randomElement($propertyTypes),
           'number_of_rooms' => $faker->randomDigit,
           'number_of_bathrooms' => $faker->randomDigit,
           'number_of_parking_spaces' => $faker->randomDigit,
           'total_surface' => $faker->randomDigit,
           'covered_surface' => $faker->randomDigit,
           'city_id' => $faker->randomDigit,
           'currency_id' => $faker->randomElement($currencies),
           'category_id' => $faker->randomElement($currencies),
           'value' => $faker->numberBetween($min = 10000, $max = 90000),
           'address' => $faker->unique()->address,

    ];
});
