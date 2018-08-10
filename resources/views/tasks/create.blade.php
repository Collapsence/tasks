@extends('layout')
@section('content')
@include('errors')

<div class="container">
    <h3>Create task</h3>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{route('tasks.store')}}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" value="{{old('title')}}">
                    <br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" value="{{old('description')}}"></textarea>
                    <input type="hidden" name="user" value="{{Auth::user()->name}}">
                    <br>
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection