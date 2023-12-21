@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="container">
        <div class="row">
            @foreach ($trains as $train)
                @if ($train->departure_date == date('Y-m-d'))
                    <div class="col-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $train->departure_date }} - {{ $train->arrival_date }}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $train->departure_station }} -
                                    {{ $train->arrival_station }}</h6>
                                <p class="card-text">{{ $train->train_code }}</p>
                                @if ($train->cancelled)
                                    <span class="badge bg-danger">Cancelled</span>
                                @else
                                    <span class="badge bg-success">Available</span>
                                @endif
                                @if ($train->in_time)
                                    <span class="badge bg-success">In Time</span>
                                @else
                                    <span class="badge bg-warning">Delayed</span>
                                @endif

                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </main>
@endsection
