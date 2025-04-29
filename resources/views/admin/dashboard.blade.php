@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-green-50 py-10 px-6 sm:px-8 lg:px-10">
    <div class="max-w-7xl mx-auto">
        <!-- Page Header -->
        <h1 class="text-3xl font-bold text-gray-800 mb-8 font-serif">Admin Dashboard</h1>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-10">
            <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-lg transition duration-300">
                <h2 class="text-lg font-semibold text-gray-700">Total Registered Users</h2>
                <p class="text-4xl font-bold text-amber-600 mt-4">{{ $totalUsers }}</p>
            </div>
        </div>

        <!-- Bookings Table -->
        <div class="bg-white rounded-2xl shadow-md p-6">
            <h2 class="text-2xl font-semibold text-gray-700 mb-6">Bookings Overview</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full text-left border-collapse">
                    <thead class="bg-amber-100 text-gray-700">
                        <tr>
                            <th class="px-4 py-3 border-b">User</th>
                            <th class="px-4 py-3 border-b">Resort</th>
                            <th class="px-4 py-3 border-b">Check-In</th>
                            <th class="px-4 py-3 border-b">Check-Out</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600">
                        @foreach($bookings as $booking)
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="px-4 py-3 border-b">{{ $booking->user->name }}</td>
                            <td class="px-4 py-3 border-b">{{ $booking->resort->name }}</td>
                            <td class="px-4 py-3 border-b">{{ $booking->check_in }}</td>
                            <td class="px-4 py-3 border-b">{{ $booking->check_out }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
