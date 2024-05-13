<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;

class TrainsTableSeeder extends Seeder
{
  
    public function run(): void
    {
      
        $trains = [
            [

                'agency'=>'Fracia',
                'Departure_station'=>'Taranto',
                'Arrival_station'=>'Napoli',
                'Departure_time'=> '2024-11-10 17:29:06',
                'Arrival_time'=>'2024-11-10 19:11:02',
                'Train_code'=>132,
                'Number_carriages'=>4,
                'in_time'=>1,
                'Deleted'=>0
            ]

        ];

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
