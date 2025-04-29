@extends('layouts.app')

@section('content')
<div class="max-h-[90vh] bg-gradient-to-br from-blue-50 to-green-50">
    <!-- Hero Banner with Search -->
    <div class="relative h-96 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent"></div>

        <div class="relative z-10 h-full flex items-center justify-center">
            <div class="text-center px-6 max-w-4xl">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 font-serif">Discover Panglao's Finest Resorts</h1>
                <p class="text-xl text-white/90 mb-8">Luxury accommodations with breathtaking ocean views</p>

                <!-- Enhanced Search Bar -->
                <div class="relative max-w-2xl mx-auto bg-white/20 backdrop-blur-sm rounded-full shadow-xl overflow-hidden">
                    <div class="flex">
                        <input type="text" placeholder="Search resorts..." class="flex-grow py-4 px-6 bg-transparent text-white placeholder-white/80 focus:outline-none">
                        <button class="bg-amber-500 hover:bg-amber-600 text-white px-8 flex items-center transition-all duration-300">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resort Listing Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 -mt-16 relative z-20">
        <!-- Filter Card -->
        <div class="bg-white rounded-2xl shadow-xl p-6 mb-8 border border-gray-100">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Find your perfect stay</h3>
                    <p class="text-sm text-gray-500">Filter from our selection of premium resorts</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 w-full md:w-auto">
                    <div>
                        <label class="block text-xs font-medium text-gray-500 mb-1">Price Range</label>
                        <select class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50">
                            <option>All Prices</option>
                            <option>₱1,000 - ₱3,000</option>
                            <option>₱3,000 - ₱5,000</option>
                            <option>₱5,000+</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-gray-500 mb-1">Room Type</label>
                        <select class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50">
                            <option>All Types</option>
                            <option>Beachfront</option>
                            <option>Pool Villa</option>
                            <option>Family Suite</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-gray-500 mb-1">Sort By</label>
                        <select class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50">
                            <option>Recommended</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Top Rated</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-gray-500">Showing <span class="font-medium">1</span> to <span class="font-medium">6</span> of <span class="font-medium">12</span> resorts</p>
            <nav class="inline-flex rounded-md shadow-sm">
                <a href="#" class="px-4 py-2 rounded-l-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 flex items-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Previous
                </a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">1</a>
                <a href="#" class="px-4 py-2 border border-gray-300 bg-amber-500 text-white">2</a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-500 hover:bg-gray-50">3</a>
                <a href="#" class="px-4 py-2 rounded-r-md border border-gray-300 bg-white text-gray-500 hover:bg-gray-50 flex items-center">
                    Next
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </nav>
        </div>
    </div>
</div>

<!-- Booking Modal -->
<div id="bookingModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden transition-opacity duration-300">
    <div class="bg-white w-full max-w-4xl rounded-2xl shadow-2xl overflow-hidden transform transition-all duration-300 scale-95 opacity-0" id="modalContent">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Complete Your Booking</h2>
                <button onclick="closeModal()" class="text-gray-400 hover:text-gray-500 transition-colors duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Resort Details</h3>
                    <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                        <img id="modalResortImage" src="" alt="" class="w-full h-48 object-cover rounded-lg mb-4">
                        <h4 id="modalResortName" class="text-xl font-bold text-gray-800 mb-1"></h4>
                        <p id="modalResortLocation" class="text-gray-600 mb-3"></p>
                        <div class="flex items-center text-amber-500 mb-4">
                            <svg class="w-5 h-5 fill-current mr-1" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span id="modalResortRating" class="font-medium"></span>
                        </div>
                        <p id="modalResortPrice" class="text-2xl font-bold text-amber-600"></p>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Booking Information</h3>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Check-In Date</label>
                                <input type="date" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Check-Out Date</label>
                                <input type="date" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Room Type</label>
                                <select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50">
                                    <option>Standard Room</option>
                                    <option>Deluxe Room</option>
                                    <option>Family Suite</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Guests</label>
                                <select class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50">
                                    <option>1 Adult</option>
                                    <option>2 Adults</option>
                                    <option>3 Adults</option>
                                    <option>4 Adults</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Special Requests</label>
                            <textarea rows="3" class="w-full px-4 py-3 border border-gray-200 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-medium py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                            Complete Booking
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section -->
<footer class="bg-gray-800 text-white py-12 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- About Section -->
            <div>
                <h3 class="text-2xl font-semibold mb-4">About Us</h3>
                <p class="text-sm text-gray-400">We offer a selection of luxury resorts in the beautiful Panglao, perfect for your next getaway. Explore, relax, and enjoy breathtaking ocean views.</p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-2xl font-semibold mb-4">Quick Links</h3>
                <ul class="text-sm space-y-2 text-gray-400">
                    <li><a href="#" class="hover:text-amber-500">Home</a></li>
                    <li><a href="#" class="hover:text-amber-500">Resort List</a></li>
                    <li><a href="#" class="hover:text-amber-500">About Us</a></li>
                    <li><a href="#" class="hover:text-amber-500">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div>
                <h3 class="text-2xl font-semibold mb-4">Contact Us</h3>
                <ul class="text-sm text-gray-400 space-y-2">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Panglao, Bohol, Philippines
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        +63 123 456 7890
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                        support@panglaoresorts.com
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-12 border-t border-gray-700 pt-8 text-center text-sm text-gray-400">
            <p>&copy; 2025 Panglao Resorts. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script>
    function toggleForm(index) {
        // In a real implementation, populate modal with resort data
        const modal = document.getElementById('bookingModal');
        const content = document.getElementById('modalContent');

        modal.classList.remove('hidden');
        setTimeout(() => {
            content.classList.remove('scale-95', 'opacity-0');
            content.classList.add('scale-100', 'opacity-100');
        }, 10);
    }

    function closeModal() {
        const modal = document.getElementById('bookingModal');
        const content = document.getElementById('modalContent');

        content.classList.remove('scale-100', 'opacity-100');
        content.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
</script>
@endsection
