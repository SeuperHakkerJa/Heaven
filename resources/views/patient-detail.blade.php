{{--@extends('layouts.app')--}}

{{--@section('content')--}}

{{--@endsection--}}

@extends('layouts.app')

@section('title')
    Patient detail
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
{{--<div></div>--}}
            @endforeach
        </div>
    </div>
@endsection