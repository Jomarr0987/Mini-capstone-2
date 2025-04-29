<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use App\Models\User;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // This is for the home page
    public function index()
    {
        $resorts = Resort::all(); 
        return view('home', compact('resorts'));
    }

    // This is for the admin dashboard
    public function authen()
    {
        
        $totalUsers = User::count();

        $bookings = Booking::with('user', 'resort')->get();

        $resorts = Resort::all();;

        return view('admin.dashboard', compact('totalUsers', 'bookings', 'resorts'));
    }
}
