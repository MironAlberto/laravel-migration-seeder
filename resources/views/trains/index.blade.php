@extends('layouts.app')

@section('page-title', 'Trains')

@section('main-content')
    <h1 class="text-center text-white">
        TRAINS
    </h1>

    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-4">
                    <div class="card mb-4 text-center text-white bg-dark">
                        <div class="card-body">
                            <h4 class="fw-bolder">
                                Train Company:
                            </h4>
                            <h2 class="card-title fw-bolder text-danger">
                                 {{ $train->company }}
                            </h2>
                            <p class="card-text">
                                <div class="fw-bolder">
                                    Departure Station:
                                </div> 
                                <strong class="fw-bolder text-danger">
                                    {{ $train->departure_station }}
                                </strong>
                            </p>
                            <p class="card-text">
                                <div class="fw-bolder">
                                    Arrival Station:
                                </div>  
                                <strong class="fw-bolder text-danger">
                                    {{ $train->arrival_station }}
                                </strong>
                            </p>
                            <div>
                                <a href="{{ route('show', ['id' => $train->id]) }}" class="btn btn-danger fw-bolder">
                                    More Details
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
