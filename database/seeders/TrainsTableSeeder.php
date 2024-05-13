<?php

namespace Database\Seeders;


use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\train;

class TrainsTableSeeder extends Seeder
{

    public function run(Faker $faker): void
    {


        for ($i = 0; $i < 10; $i++) 
        {

            $train = new Train();
            $train->agency = $faker->countryCode();
            $train->Departure_station = $faker->countryCode();
            $train->Arrival_station = $faker->countryCode();
            $train->Departure_time = $faker->dateTime();
            $train->Arrival_time = $faker->dateTime();
            $train->Train_code = $faker->numberBetween(0, 100);
            $train->Number_carriages = $faker->numberBetween(0, 100);
            $train->in_time = $faker->boolean();
            $train->Deleted = $faker->boolean();
            $train->save();
        }





        // Passaggio con Seeder
        // ho passatto l'array in config/db.php
        // $trains = config('db.trains');

        // foreach ($trains as  $train) {
        //     $newTrain = new train();
        //     $newTrain->agency = $train['agency'];
        //     $newTrain->Departure_station = $train['Departure_station'];
        //     $newTrain->Arrival_station = $train['Arrival_station'];
        //     $newTrain->Departure_time = $train['Departure_time'];
        //     $newTrain->Arrival_time = $train['Arrival_time'];
        //     $newTrain->Train_code = $train['Train_code'];
        //     $newTrain->Number_carriages = $train['Number_carriages'];
        //     $newTrain->in_time = $train['in_time'];
        //     $newTrain->Deleted = $train['Deleted'];
        //     $newTrain->save();



    }
}
