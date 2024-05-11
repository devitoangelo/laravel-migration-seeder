@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row row-cols-1">
            @forelse ($trains as $train)
                <div class="col">
                    <div class="card">
                        <a href="{{ route('guests.trains.show', $train) }}">
                            <div class="card-body">
                                {{ $train->agency }}
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p>Sorry no Train</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
