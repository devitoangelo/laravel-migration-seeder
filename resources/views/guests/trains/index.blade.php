@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row row-cols-1">
            @forelse ($trains as $train)
                <div class="col">
                    <div class="card">
                        <a href="{{ route('guests.trains.show', $train) }}">
                            <div class="card-title">

                                <h3>{{ $train->agency }}</h3>
                            </div>
                        </a>
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
                            <h5 class="py-3">Codice Treno : {{ $train->Train_code }}</h5>
                        
                        </div>

                    </div>
                </div>
            @empty
                <div class="col">
                    <p>Sorry no Train</p>
                </div>
            @endforelse
        </div>
    </div>


    <style>
        .train {
            display: flex;
            align-items: center;
            justify-content: space-between
        }
    </style>
@endsection
