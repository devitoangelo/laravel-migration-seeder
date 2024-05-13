<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;

class TrainsTableSeeder extends Seeder
{
  
    public function run(): void
    {
      
        $trains = config('db.trains');

        foreach ($trains as  $train) {
            $newTrain = new train();
            $newTrain->agency = $train['agency'];
            $newTrain->Departure_station = $train['Departure_station'];
            $newTrain->Arrival_station = $train['Arrival_station'];
            $newTrain->Departure_time = $train['Departure_time'];
            $newTrain->Arrival_time = $train['Arrival_time'];
            $newTrain->Train_code = $train['Train_code'];
            $newTrain->Number_carriages = $train['Number_carriages'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->Deleted = $train['Deleted'];
            $newTrain->save();



        }

    }
}
