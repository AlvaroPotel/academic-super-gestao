<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->tollFreePhoneNumber,
        'email' => $faker->unique()->email,
        'reason_contact' => $faker->numberBetween(1, 3),
        'message' => $faker->text(200),
    ];
});
