<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Petition;
use Faker\Generator as Faker;

$factory->define(Petition::class, function (Faker $faker) {
    return [
        "title"=>$faker->word(),
        "category"=>$faker->text(50),
        "description"=>$faker->text(200),
        "author"=>$faker->name(),
        "signees"=>$faker->numberBetween(0,1000000)
    ];
});
