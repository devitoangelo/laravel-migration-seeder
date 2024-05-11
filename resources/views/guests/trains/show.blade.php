@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="card-title">
               

                    <div class="card-body">
                        <div class="train">
                            <div>
                                <h4>Stazione di partenza</h4>
                                {{ $train->Departure_station }}
                            </div>
                            <div>
                                <h4>Partenza</h4>
                                {{ $train->Departure_time }}
                            </div>
                            <div>
                                <h4>Arrivo</h4>
                                {{ $train->Arrival_time }}
                            </div>


                            <div>
                                <h4>Stazione di arrivo</h4>
                                {{ $train->Arrival_station }}
                            </div>

                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>



 <style>

    .train{
   
            display: flex;
            align-items: center;
            justify-content: space-between
     


    }
    
</style>   
@endsection


