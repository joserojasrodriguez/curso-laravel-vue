<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name'  => $faker->lastName,
        'phone'      => $faker->e164PhoneNumber,
        'email'      => $faker->email,
        'doc'        => $faker->randomNumber(8) . "-" . strtoupper($faker->randomLetter),
        'address'    => $faker->address,
        'vat'        => 21.00,
        'active'     => $faker->boolean

    ];
});
