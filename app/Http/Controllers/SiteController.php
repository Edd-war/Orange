<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function work()
    {
        return view('orange.work');
    }

    public function about()
    {
        return view('orange.about');
    }

    public function services()
    {
        return view('orange.services');
    }

    public function blog()
    {
        return view('orange.blog');
    }

    public function contact()
    {
        return view('orange.contact');
    }
}
