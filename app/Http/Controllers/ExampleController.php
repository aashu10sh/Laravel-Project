<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller // /killer/{id}?name={name_var}
{
    function index(Request $request, $id)
    {
        $name = $request -> name;
        return view('test_conroller',compact('name','id'));
    }

}
