@extends('layouts.app')

@section('content')
<div class="container">
    <h3>My tasks</h3>
    <a href="{{route('tasks.create')}}" class="btn btn-success">Create</a>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Actions</td>
                </tr>
                </thead>

                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->title}}</td>
                        <td>
                            <a href="{{route('tasks.show', $task->id)}}" class="btn btn-success">
                                Open
                            </a>

                            @if(Auth::user()->name == $task->user)
                            <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-warning">
                                Edit
                            </a>
                            <form method="post" action="{{route('tasks.destroy', $task->id)}}" class="btn">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button onclick="return confirm('Are you sure?')">Delete</button>
                            @endif

                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection