<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResortController extends Controller
{
    public function index()
    {
        $resorts = Resort::all();

        return view('resort.index', compact('resorts'));
    }
    
}
