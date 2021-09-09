<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class SiteController extends Controller
{
    public function work()
    {
        return view('orange.work', ['page_title' => 'Our Works']);
    }

    public function about()
    {
        return view('orange.about', ['page_title' => 'About Us']);
    }

    public function services()
    {
        // $services=array();
        // for ($i=1; $i < 20; $i++) 
        // { 
        //     $services[]=new Service($i, "My Service ".$i, "My description ".$i, "icon-eye");
        // }
        $services = Service::all();
        
        return view('orange.services', ['page_title' => 'Our Services', 'services' => $services]);
    }

    public function blog()
    {
        return view('orange.blog', ['page_title' => 'Blog']);
    }

    public function contact()
    {
        return view('orange.contact', ['page_title' => 'Contact']);
    }
}
