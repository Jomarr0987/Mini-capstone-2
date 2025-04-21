<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
        public function store(Request $request)
    {
        // Handle booking logic here (save to DB, send email, etc.)
        return back()->with('success', 'Booking request sent!');
    }

}
