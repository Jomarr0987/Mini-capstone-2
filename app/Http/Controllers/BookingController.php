<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Resort;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create($id)
    {
        $resort = Resort::findOrFail($id);
        return view('bookings.create', compact('resort'));
    }

    public function store(Request $request, Resort $resort)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'room_type' => 'required|string',
            'guests' => 'required|integer|min:1',
            'check_in' => 'required|date|after:today',
            'check_out' => 'required|date|after:check_in',
            'gcash_number' => 'required|string|max:15',
            'gcash_amount' => 'required|numeric|min:1',
        ]);

        // Create a new booking instance and assign the validated data
        $booking = new Booking();
        $booking->full_name = $validated['full_name'];
        $booking->phone = $validated['phone'];
        $booking->email = $validated['email'];
        $booking->room_type = $validated['room_type'];
        $booking->guests = $validated['guests'];
        $booking->check_in = $validated['check_in'];
        $booking->check_out = $validated['check_out'];
        $booking->gcash_number = $validated['gcash_number'];
        $booking->gcash_amount = $validated['gcash_amount'];
        
        // Associate the booking with the resort and the authenticated user
        $booking->resort_id = $resort->id; // Assuming the resort was passed to the method
        $booking->user_id = auth()->id(); // If you are using authentication

        // Save the booking to the database
        $booking->save();

        // Redirect to a page with a success message
        return redirect()->route('resorts.index')->with('success', 'Booking successfully created!');
    }
}
