@extends('layouts.app')

@section('page-title', $train->company)

@section('main-content')
    <div class="d-flex justify-content-end pt-3 pe-3">
        <a href="{{ route('trains') }}" class="btn btn-danger fw-bolder">
            <- Back to the trains
        </a>
    </div>

    <h1 class="text-center mb-4 text-white">
        {{ $train->company }}
    </h1>

    <div class="container">
        <div class="row  d-flex justify-content-center">
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
                        <p class="card-text">
                            <div class="fw-bolder">
                                Departure Time:
                            </div> 
                            <strong class="fw-bolder text-danger">
                                {{ $train->departure_time }}
                            </strong>
                        </p>
                        <p class="card-text">
                            <div class="fw-bolder">
                                Arrival Time:
                            </div> 
                            <strong class="fw-bolder text-danger">
                                {{ $train->arrival_time }}
                            </strong>
                        </p>
                        <p class="card-text">
                            <div class="fw-bolder">
                                Train Code:
                            </div> 
                            <strong class="fw-bolder text-danger">
                                {{ $train->train_code }}
                            </strong>
                        </p>
                        <p class="card-text">
                            <div class="fw-bolder">
                                Number of Carriages:
                            </div> 
                            <strong class="fw-bolder text-danger">
                                {{ $train->train_carriages }}
                            </strong>
                        </p>
                        <p class="card-text">
                            <div class="fw-bolder">
                                Time Status:
                            </div> 
                            <strong class="fw-bolder text-danger">
                                {{ $train->in_time ? 'The train is on time, but it might be delated - please check the train status' : 'The train is delayed, check if it is delated or not' }}
                            </strong>
                        </p>
                        <p class="card-text">
                            <div class="fw-bolder">
                                Train Status:
                            </div> 
                            <strong class="fw-bolder text-danger">
                                {{ $train->deleted ? 'Not Delated' : 'Unfortunately, your train has been delated' }}
                            </strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection