@extends('layout')

@section('title')
    Todos Page
@stop

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="/create/todo" method="post">
                @csrf
                <input type="text" class="form-control input-lg" placeholder="Create a new todo" name="todo">
            </form>
        </div>
    </div>
    <hr>
    @foreach($todos as $todo)
        {{ $todo->todo }} 
        <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">x</a>
        <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info">update</a>
        @if(!$todo->completed)
            <a href="{{ route('todos.completed', [ 'id' => $todo->id ]) }}" class="btn btn-success">Mark as completed</a>
        @else
            <span class="text-success">Completed</span>
        @endif
        <hr>
    @endforeach
@stop