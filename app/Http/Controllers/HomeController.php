<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resort;

class HomeController extends Controller
{
    public function index()
    {
        $resorts = Resort::all(); // or whatever logic you use to get resorts
        return view('home', compact('resorts'));
    }
}
