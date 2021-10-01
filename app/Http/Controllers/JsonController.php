<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class JsonController extends Controller
{
    public function names()
    {
        $names = ["Juan", "Jorge", "Luis", "Luisa", "Perla", "Norma", "Ignacion"];
        return response()->json($names, Response::HTTP_OK);
    }

    public function services()
    {
        $services = Service::all();
        return response()->json($services, Response::HTTP_OK);
    }
}
