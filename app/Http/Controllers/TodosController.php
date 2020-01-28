<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodosController extends Controller
{
    //

    public function index(){
        // get all todos in database
        $todos = Todo::all();

        return view('todos')->with('todos', $todos);
    }

    public function store(Request $request){

        // dd($request->all());
        // instantiate a new class
        $todo = new Todo;

        $todo->todo = $request->todo;

        $todo->save();

        return redirect()->back();
    }

    public function delete($id){

        dd($id);

    }

}
