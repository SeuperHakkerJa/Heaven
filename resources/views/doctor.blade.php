@extends('layouts.app')

@section('title')
    Doctor Home
@endsection

@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-2 m-1">
                <img class="img-fluid rounded img-responsive" src="https://is4-ssl.mzstatic.com/image/thumb/Purple115/v4/f6/de/7b/f6de7b8c-1299-6e59-817c-5d3a9fd43c38/AppIcon-1x_U007emarketing-85-220-0-6.png/246x0w.jpg" alt="">
            </div>
            <div class="col-6 my-2">
                <h1>{{ $doctor->name }}</h1>
            </div>

            <div class="container m-5 col-10 offset-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Symptom</th>
                    </tr>
            <div class="offset-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Symptom</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($doctor->patients as $patient)
                        <tr>
                            <td><a href="{{ route('detail', ['doc_id' => $doctor->id, 'pa_id' => $patient->id]) }}"> {{$patient->name}} </a></td>
                            <td>{{$patient->age}}</td>
                            <td>{{$patient->what_happened}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection