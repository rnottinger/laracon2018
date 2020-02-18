<?php

use Faker\Generator as Faker;

$factory->define(App\Interaction::class, function (Faker $faker) {
    $date = $faker->dateTimeThisDecade;
// date('Y-m-d H:i:s');
    return [
        'type' => $faker->randomElement([
            'Phone',
            'Email',
            'SMS',
            'Meeting',
            'Breakfast',
            'Lunch',
            'Dinner',
            'Twitter',
            'Facebook',
            'LinkedIn',
            'Viewed Invoice',
            'Paid Invoice',
        ]),
        'created_at' => $date,
        'updated_at' => $date,
    ];
});
