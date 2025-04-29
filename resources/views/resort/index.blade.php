@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-green-50 py-12 px-4 sm:px-6 lg:px-8">
    <!-- Header -->
    <div class="max-w-7xl mx-auto text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4 font-serif">Discover Your Perfect Getaway</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Luxury resorts in Panglao, Bohol with breathtaking ocean views and world-class amenities</p>
    </div>

    <!-- Resort Cards Grid -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach($resorts as $index => $resort)
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2">
            <!-- Resort Image -->
            <div class="relative h-64 overflow-hidden">
                <img src="{{ asset('images/' . $resort['image']) }}" alt="{{ $resort['name'] }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute bottom-4 left-4">
                    <h3 class="text-xl font-bold text-white">{{ $resort['name'] }}</h3>
                    <p class="text-sm text-white/90">{{ $resort['location'] }}</p>
                </div>
            </div>

            <!-- Resort Details -->
            <div class="p-6">
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>{{ $resort['address'] }}</span>
                </div>

                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>{{ $resort['contact'] }}</span>
                </div>

                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>{{ $resort['email'] }}</span>
                </div>

                <!-- Book Now Button -->
                <a href="{{ route('book.create', $resort->id) }}" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-medium py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Book Now
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
