{{--@extends('layouts.app')--}}

{{--@section('content')--}}

{{--@endsection--}}

@extends('layouts.app')

@section('title')
    Patient Home
@endsection

@section('content')
    @patient
    <div class="container">
        <div class="row py-5">
            <div class="col-2 m-1">
                <img class="img-fluid rounded img-responsive" src="https://is4-ssl.mzstatic.com/image/thumb/Purple115/v4/f6/de/7b/f6de7b8c-1299-6e59-817c-5d3a9fd43c38/AppIcon-1x_U007emarketing-85-220-0-6.png/246x0w.jpg" alt="">
            </div>
            <div class="col-6 my-2">
                <h1>{{ $user->patient->name }}</h1>
                <h3>Age: {{ $user->patient->age }}</h3>
                <h3>Date of surgery: {{ $user->patient->date_of_surgery }}</h3>
                <p>{{ $user->patient->what_happened }}</p>

            </div>
            <div class="col-3 offset-4">

            </div>
        </div>

        {{--<div id="steps" class="container mb-4">--}}
            {{--<div class="page-header">--}}
                {{--<h1 class="pb-2 mb-2">{{ $task->name }}</h1>--}}
                {{--<p class="small">{{ $task->to_do }}</p>--}}
            {{--</div>--}}
            {{--<ul class="timeline">--}}
                {{--@foreach($task->steps as $step)--}}
                    {{--<li class="{{ $loop->index % 2 ? "timeline-inverted" : "" }}">--}}
                        {{--<div class="timeline-badge {{ ["primary", "secondary", "success", "danger", "warning", "info"][$loop->index % 6] }}">--}}
                            {{--<i class="fas fa-stop"></i>--}}
                        {{--</div>--}}
                        {{--<div class="timeline-panel">--}}
                            {{--<div class="timeline-heading">--}}
                                {{--<h4 class="timeline-title">{{ $step->name }}</h4>--}}
                                {{--<p><small class="text-muted"><i class="fas fa-calendar mr-2"></i>{{ $step->period }}</small></p>--}}
                            {{--</div>--}}
                            {{--<div class="timeline-body">--}}
                                {{--<p>{{ $step->introduction }}</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}


        {{--@foreach($user->logs as $log)--}}
        {{--<div class="card">--}}
        {{--<div class="card-body">--}}
        {{--{{ $log->log_body }}--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--@endforeach--}}
    </div>
    @elsedoctor
    <div class="container">
        DOCTOR
    </div>
    @elseuser
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                    <a class="btn btn-md btn-primary" href="{{ $link }}"> Go to your home page!</a>
                </div>
            </div>
        </div>
    </div>
    @enduser
@endsection