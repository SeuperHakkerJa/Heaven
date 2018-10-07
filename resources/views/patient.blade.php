@extends('layouts.app')

@section('title')
    Patient Display
@endsection

@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-5 col-lg-2 m-2">
                <img class="img-fluid rounded img-responsive" src="https://is4-ssl.mzstatic.com/image/thumb/Purple115/v4/f6/de/7b/f6de7b8c-1299-6e59-817c-5d3a9fd43c38/AppIcon-1x_U007emarketing-85-220-0-6.png/246x0w.jpg" alt="">
            </div>
            <div class="col-5 m-2">
                <h1>{{ $patient->name }}</h1>
                <h3>Age: {{ $patient->age }}</h3>
                <h3>Date of surgery: {{ $patient->date_of_surgery }}</h3>
                <p>{{ $patient->what_happened }}</p>

            </div>
        </div>

        <div class="container mb-4">
            {{--<div class="page-header">--}}
                {{--<h1 class="pb-2 mb-2">{{ $tasks->name }}</h1>--}}
                {{--<p class="small">{{ $tasks->to_do }}</p>--}}
            {{--</div>--}}
            <ul class="timeline">
                @foreach($tasks as $step)
                    <li class="{{ $loop->index % 2 ? "timeline-inverted" : "" }}">
                        <div class="timeline-badge {{ ["primary", "secondary", "success", "danger", "warning", "info"][$loop->index % 6] }}">
                            <i class="fas fa-stop"></i>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">{{ $step->name }}</h4>
                                <p><small class="text-muted"><i class="fas fa-calendar mr-2"></i>{{ $step->instruction }}</small></p>
                            </div>
                            <div class="timeline-body">
                                <p>{{ $step->assigned_time }}</p>
                                <p>{{ $step->due_time }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="container mt-3">
            @foreach($tasks as $step)
                <div class="card mt-3">
                    <h5 class="card-header">{{ $step->name }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">{{ $step->to_do }}</h5>
                        <p class="card-text">{{ $step->instruction }}</p>
                        <a href="" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection