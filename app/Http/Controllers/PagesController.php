<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function new(){

        // echo "Some Echoed Data";
        return view('new');
    }
}


