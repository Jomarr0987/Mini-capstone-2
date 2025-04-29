@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">All Bookings</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Resort</th>
                <th>Room Type</th>
                <th>Guests</th>
                <th>Check In</th>
                <th>Check Out</th>
                <th>GCash</th>
            </tr>
        </thead>
        <tbody>
            @forelse($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->user->name ?? 'N/A' }}</td>
                    <td>{{ $booking->resort->name ?? 'N/A' }}</td>
                    <td>{{ $booking->room_type }}</td>
                    <td>{{ $booking->guests }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>₱{{ number_format($booking->gcash_amount, 2) }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">No bookings yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
