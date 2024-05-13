<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trains;


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
            $newTrain = new Trains();
            $newTrain->nome = $train['name'];
            $newTrain->nome = $train['name'];


        }

    }
}
