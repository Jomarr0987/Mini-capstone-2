@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-green-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-8">Book Your Stay at {{ $resort->name }}</h2>

        <form action="{{ route('book.store', ['resort' => $resort->id]) }}" method="POST">
            @csrf

            <!-- Full Name -->
            <div class="mb-6">
                <label for="full_name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" name="full_name" id="full_name" class="mt-1 block w-full p-3 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500" required>
            </div>

            <!-- Phone Number -->
            <div class="mb-6">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" name="phone" id="phone" class="mt-1 block w-full p-3 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500" required>
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full p-3 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500" required>
            </div>

            <!-- Room Type -->
            <div class="mb-6">
                <label for="room_type" class="block text-sm font-medium text-gray-700">Room Type</label>
                <select name="room_type" id="room_type" class="mt-1 block w-full p-3 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500" required>
                    <option value="Standard">Standard</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Suite">Suite</option>
                </select>
            </div>

            <!-- Number of Guests -->
            <div class="mb-6">
                <label for="guests" class="block text-sm font-medium text-gray-700">Number of Guests</label>
                <input type="number" name="guests" id="guests" class="mt-1 block w-full p-3 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500" required>
            </div>

            <!-- Check-In Date -->
            <div class="mb-6">
                <label for="check_in" class="block text-sm font-medium text-gray-700">Check-In Date</label>
                <input type="date" name="check_in" id="check_in" class="mt-1 block w-full p-3 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500" required>
            </div>

            <!-- Check-Out Date -->
            <div class="mb-6">
                <label for="check_out" class="block text-sm font-medium text-gray-700">Check-Out Date</label>
                <input type="date" name="check_out" id="check_out" class="mt-1 block w-full p-3 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500" required>
            </div>

            <!-- GCash Number -->
            <div class="mb-6">
                <label for="gcash_number" class="block text-sm font-medium text-gray-700">GCash Number</label>
                <input type="text" name="gcash_number" id="gcash_number" class="mt-1 block w-full p-3 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500" required>
            </div>

            <!-- GCash Amount -->
            <div class="mb-8">
                <label for="gcash_amount" class="block text-sm font-medium text-gray-700">GCash Amount</label>
                <input type="number" name="gcash_amount" id="gcash_amount" class="mt-1 block w-full p-3 rounded-lg border border-gray-300 focus:ring-amber-500 focus:border-amber-500" required>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-medium py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    Book Now
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
