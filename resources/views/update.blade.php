@extends('layout')


@section('content')
    <div class="col-lg-12">
    <form action="{{route('todos.save', ['id'=>$todo->id])}}" method="POST">
        {{csrf_field()}}
       <input type="text" class="form-control input-lg" placeholder="Create a new todo" name="todo" value="{{$todo->todo}}">
       </form>
    </div>
    <hr>
@stop
