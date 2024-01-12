<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class FirebaseController extends Controller
{

    public function index()
    {

        Artisan::call("route:clear");
        return view('firebase');
    }
    public function welcome()
    {
        return view('welcome');
    }
}
