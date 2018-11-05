@extends('layout')

@section('title')
    Todos Page
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('todos.save', [ 'id' => $todo->id ]) }}" method="post">
                @csrf
                <input type="text" class="form-control input-lg" placeholder="" value="{{ $todo->todo }}" name="todo">
            </form>
        </div>
    </div>
    <hr>
@stop