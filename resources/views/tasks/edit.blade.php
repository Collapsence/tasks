@extends('layout')
@section('content')
@include('errors')

<div class="container">
    <h3>Edit task # - {{$task->id}}</h3>
    <div class="row">
        <div class="col-md-12">
            <form method="PUT" action="{{route('tasks.update', $task->id)}}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{$task->title}}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$task->description}}</textarea>
                    <br>
                    <button class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection