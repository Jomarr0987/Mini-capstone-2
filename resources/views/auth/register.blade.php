<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Panglao Resorts</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left side - Background image -->
        <div class="md:w-1/2 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="bg-black bg-opacity-40 h-full flex flex-col justify-center p-12">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 font-serif">Join Panglao Resorts</h1>
                <p class="text-xl text-white mb-8">Create an account and start your dream vacation today</p>
                <div class="flex items-center">
                    <div class="w-12 h-1 bg-amber-400 mr-4"></div>
                    <p class="text-white italic">Experience paradise like never before</p>
                </div>
            </div>
        </div>

        <!-- Right side - Registration form -->
        <div class="md:w-1/2 flex items-center justify-center p-8 bg-gray-50">
            <div class="w-full max-w-md">
                <!-- Logo -->
                <div class="flex justify-center mb-8">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="ml-2 text-2xl font-bold text-gray-800 font-serif">Panglao Resorts</span>
                    </div>
                </div>

                <!-- Registration Form -->
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Create your account</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="mb-4">
                            <x-input-label for="name" :value="__('Name')" class="block text-sm font-medium text-gray-700 mb-1" />
                            <x-text-input 
                                id="name" 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200" 
                                type="text" 
                                name="name" 
                                :value="old('name')" 
                                required 
                                autofocus 
                                autocomplete="name"
                                placeholder="Enter your full name"
                            />
                            <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-600" />
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700 mb-1" />
                            <x-text-input 
                                id="email" 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                required 
                                autocomplete="username"
                                placeholder="Enter your email"
                            />
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <x-input-label for="password" :value="__('Password')" class="block text-sm font-medium text-gray-700 mb-1" />
                            <x-text-input 
                                id="password" 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200" 
                                type="password" 
                                name="password" 
                                required 
                                autocomplete="new-password"
                                placeholder="Create a password"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-6">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-gray-700 mb-1" />
                            <x-text-input 
                                id="password_confirmation" 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200" 
                                type="password" 
                                name="password_confirmation" 
                                required 
                                autocomplete="new-password"
                                placeholder="Re-type your password"
                            />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-600" />
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-white font-medium py-3 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                            {{ __('Register') }}
                        </button>

                        <!-- Already registered -->
                        <div class="mt-6 text-center">
                            <p class="text-sm text-gray-600">
                                Already have an account?
                                <a href="{{ route('login') }}" class="font-medium text-amber-600 hover:text-amber-500 transition duration-200">
                                    {{ __('Log in') }}
                                </a>
                            </p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
