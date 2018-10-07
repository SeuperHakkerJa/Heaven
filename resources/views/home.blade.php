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
                <img class="img-fluid img-thumbnail rounded img-responsive" src="https://is4-ssl.mzstatic.com/image/thumb/Purple115/v4/f6/de/7b/f6de7b8c-1299-6e59-817c-5d3a9fd43c38/AppIcon-1x_U007emarketing-85-220-0-6.png/246x0w.jpg" alt="">
                <div class="col-12 m-1">
                    <h2>{{ $user->age }}</h2>
                </div>
            </div>
            <div class="col-2 mt-5 my-5">
                <h1>{{ $user->name }}</h1>
            </div>
            <div class="col-3 offset-4">

            </div>
        </div>
        <time-line></time-line>
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