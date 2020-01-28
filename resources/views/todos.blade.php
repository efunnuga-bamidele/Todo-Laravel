@extends('layout')


@section('content')
    <div class="col-lg-6 col-lg-offset-3">
       <form action="/create/todo" method="POST">
        {{csrf_field()}}
        <input type="text" class="form-control input-lg" placeholder="Create a new todo" name="todo">
       </form>
    </div>
    <hr>
    @foreach($todos as $todo)

    {{$todo->id}}.
    {{$todo->todo}} <a href="{{route('todo.delete', ['id' => $todo->id])}}" class="btn btn-danger">x</a> <a href="{{route('todo.update', ['id' => $todo->id])}}" class="btn btn-primary btn-xs">update</a>
    <hr>

    @endforeach
@stop
