<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kursus;
use Faker\Generator as Faker;

$factory->define(Kursus::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->state(Kursus::class, 'mengemudi', function (Faker $faker) {
    return [
        'program_kursus_id' => Program::where('jenis', 'mengemudi')->get()->random()->id,
        'waktu_kursus_id' => Waktu::where('jenis', 'mengemudi')->get()->random()->id,
    ];
});


$factory->state(Kursus::class, 'komputer', function (Faker $faker) {
    return [
        'program_kursus_id' => Program::where('jenis', 'komputer')->get()->random()->id,
        'waktu_kursus_id' => Waktu::where('jenis', 'komputer')->get()->random()->id,
    ];
});