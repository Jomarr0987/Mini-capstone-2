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
                <button onclick="toggleForm({{ $index }})" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-medium py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Book Now
                </button>

                <!-- Booking Form -->
                <form onsubmit="return showReceipt(event, {{ $index }})" class="mt-6 hidden bg-gray-50 p-6 rounded-xl" id="form-{{ $index }}">
                    @csrf
                    <input type="hidden" name="resort_name" value="{{ $resort['name'] }}">

                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Booking Details</h4>

                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" name="full_name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <input type="tel" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200" placeholder="0912 345 6789">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200" placeholder="your@email.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Room Type</label>
                            <select name="room_type" onchange="updatePrice(this, {{ $index }})" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200">
                                <option value="">Select Room Type</option>
                                <option value="Standard Room" data-price="1500">Standard Room - ₱1,500</option>
                                <option value="Deluxe Room" data-price="2500">Deluxe Room - ₱2,500</option>
                                <option value="Family Suite" data-price="4000">Family Suite - ₱4,000</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Room Price</label>
                            <input type="text" id="price-{{ $index }}" readonly class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 font-medium text-amber-600">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Number of Guests</label>
                            <input type="number" name="guests" required min="1" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Check-In</label>
                                <input type="datetime-local" name="check_in" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Check-Out</label>
                                <input type="datetime-local" name="check_out" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200">
                            </div>
                        </div>

                        <!-- GCash Payment Section -->
                        <div class="pt-4 border-t border-gray-200">
                            <h5 class="text-sm font-medium text-gray-700 mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z"/>
                                </svg>
                                GCash Payment
                            </h5>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">GCash Number</label>
                                    <input type="tel" name="gcash" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200" placeholder="0912 345 6789">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">GCash Amount</label>
                                    <input type="number" name="gcash_amount" id="gcash-amount-{{ $index }}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200" step="0.01" min="0" placeholder="0.00">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-medium py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Confirm Booking
                        </button>
                    </div>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Receipt Modal -->
<div id="receiptModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center p-4 z-50 hidden">
    <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl overflow-hidden transform transition-all duration-300 scale-95 opacity-0" id="modalContent">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold text-gray-800">Booking Confirmation</h2>
                <button onclick="closeReceipt()" class="text-gray-400 hover:text-gray-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="bg-gradient-to-r from-amber-50 to-green-50 p-6 rounded-lg mb-6">
                <div class="flex items-center justify-center mb-4">
                    <svg class="w-12 h-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-center text-gray-800 mb-2">Booking Successful!</h3>
                <p class="text-sm text-center text-gray-600">Your reservation has been confirmed. Details have been sent to your email.</p>
            </div>

            <div id="receiptDetails" class="space-y-3 text-sm text-gray-700"></div>

            <div class="mt-6 pt-4 border-t border-gray-200">
                <h4 class="text-sm font-medium text-gray-700 mb-2">Payment Instructions</h4>
                <ol class="list-decimal list-inside space-y-1 text-sm text-gray-600">
                    <li>Open your GCash app</li>
                    <li>Go to "Send Money"</li>
                    <li>Enter the GCash number provided</li>
                    <li>Input the exact amount</li>
                    <li>Add your booking reference as note</li>
                    <li>Complete the transaction</li>
                </ol>
            </div>

            <button onclick="closeReceipt()" class="mt-6 w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-medium py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                Close
            </button>
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    function toggleForm(index) {
        const form = document.getElementById(`form-${index}`);
        form.classList.toggle('hidden');
        form.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }

    function updatePrice(select, index) {
        const selected = select.options[select.selectedIndex];
        const price = selected.getAttribute('data-price');
        const priceText = price ? `₱${parseInt(price).toLocaleString()}` : '';
        document.getElementById(`price-${index}`).value = priceText;
        document.getElementById(`gcash-amount-${index}`).value = price || '';
    }

    function showReceipt(event, index) {
        event.preventDefault();
        const form = document.getElementById(`form-${index}`);
        const data = new FormData(form);

        const receiptHTML = `
            <div class="grid grid-cols-2 gap-2">
                <div class="font-medium">Resort:</div>
                <div>${data.get('resort_name')}</div>

                <div class="font-medium">Name:</div>
                <div>${data.get('full_name')}</div>

                <div class="font-medium">Phone:</div>
                <div>${data.get('phone')}</div>

                <div class="font-medium">Email:</div>
                <div>${data.get('email')}</div>

                <div class="font-medium">Room Type:</div>
                <div>${data.get('room_type')}</div>

                <div class="font-medium">Guests:</div>
                <div>${data.get('guests')}</div>

                <div class="font-medium">Check-In:</div>
                <div>${new Date(data.get('check_in')).toLocaleString()}</div>

                <div class="font-medium">Check-Out:</div>
                <div>${new Date(data.get('check_out')).toLocaleString()}</div>

                <div class="font-medium">GCash Number:</div>
                <div>${data.get('gcash')}</div>

                <div class="font-medium">Amount Paid:</div>
                <div class="font-bold text-green-600">₱${parseFloat(data.get('gcash_amount')).toLocaleString(undefined, {minimumFractionDigits: 2})}</div>
            </div>
        `;

        document.getElementById('receiptDetails').innerHTML = receiptHTML;

        const modal = document.getElementById('receiptModal');
        const modalContent = document.getElementById('modalContent');

        modal.classList.remove('hidden');
        setTimeout(() => {
            modalContent.classList.remove('scale-95', 'opacity-0');
            modalContent.classList.add('scale-100', 'opacity-100');
        }, 10);

        form.reset();
        form.classList.add('hidden');
        return false;
    }

    function closeReceipt() {
        const modal = document.getElementById('receiptModal');
        const modalContent = document.getElementById('modalContent');

        modalContent.classList.remove('scale-100', 'opacity-100');
        modalContent.classList.add('scale-95', 'opacity-0');

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
</script>
@endsection
