<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;


$factory->define(Student::class, function (Faker $faker) {
    return [
        'national_code' => $this->faker->unique()->numberBetween(1111111111, 9999111111),
        'student_no' => $this->faker->unique()->numberBetween(1111111111, 9999111111),
        'name' => $this->faker->name,
        'university' => $this->faker->streetName, // password
        'grade' => $this->faker->unique()->randomFloat(null, 12, 20),
    ];
});
