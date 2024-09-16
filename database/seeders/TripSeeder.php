<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $new_trip = new Trip();
        $new_trip->title = $faker->word();
        $new_trip->description = $faker->words(5);
        $new_trip->date_departurs = $faker->dateTimeBetween('-1 week', '+1 week');
        $new_trip->time_to_arrival = $faker->dateTimeInInterval('-1 week', '+3 days');
        $new_trip->price = $faker->numberBetween(150, 1000);
        $new_trip->save();
    }
}
