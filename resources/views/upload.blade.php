@extends('layouts.app')

@section('title')
    Upload
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('submit', ['id' => $patient->id, 'task_id' => $task_id]) }}" method="post" class="bg-white box-shadow jumbotron">
            @method('POST')
            @csrf
            <h5 class="border-bottom border-gray pb-2 mb-2">Upload Your record</h5>

            <div class="form-group mb-3">
                <label for="thumbnail">photo <span class="text-info">optional</span></label>
                <input type="file" class="form-control-file" id="thumbnail" name="pic">
            </div>
            <div class="form-group mb-3">
                <label for="thumbnail">record <span class="text-info">required</span></label>
                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3" name="record"></textarea>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-info btn-block">submit</button>
            </div>
        </form>
    </div>
@endsection