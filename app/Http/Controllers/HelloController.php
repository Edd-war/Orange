<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello3()
    {
        return "<h3>Hello World 3!!</h3>";
    }

    public function hello4()
    {
        return view('hello4');
    }

    public function hello5($firstname, $lastname)
    {
        return view('hello5', ['firstname' => $firstname, 'lastname'=>$lastname]);
    }

    public function hello6($name = "Eduardo Arroyo")
    {
        return view('hello6', ['name'=>$name]);
    }
}
