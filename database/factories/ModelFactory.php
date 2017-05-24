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
        'name' => $faker-> name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'login' => $faker->words(1, true),
        'type' => $faker->words(1, true),
        'year' => $faker->words(1, true),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Discipline::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker-> name,
    ];
});

$factory->define(App\Course::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker-> name,
        'abbreviation' => $faker->words(1, true),
    ];
});

$factory->define(App\Work::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->words(3, true),
        'score' => $faker->words(1, true),
        'deadline' => $faker->words(1, true),
        'comment' => $faker->words(5, true),
        'discipline_id' => \App\Discipline::all()->random()->id,
    ];
});

$factory->define(App\File::class, function (Faker\Generator $faker) {

    return [
        'protocol' => $faker->words(1, true),
        'work_id' => \App\Work::all()->random()->id,
    ];
});

$factory->define(App\Course_Discipline::class, function (Faker\Generator $faker) {

    return [
        'period' => $faker->words(1, true),
        'course_id' => \App\Course::all()->random()->id,
        'discipline_id' => \App\Discipline::all()->random()->id,
    ];
});

$factory->define(App\Discipline_User::class, function (Faker\Generator $faker) {

    return [
        'discipline_id' => \App\Discipline::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,
    ];
});

$factory->define(App\Course_User::class, function (Faker\Generator $faker) {

    return [
        'course_id' => \App\Course::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,
    ];
});

$factory->define(App\Group::class, function (Faker\Generator $faker) {

    return [
        'file_id' => \App\File::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,
    ];
});