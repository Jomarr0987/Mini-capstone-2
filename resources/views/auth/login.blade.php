<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panglao Resorts - Login</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Laravel Vite asset loading --}}
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="min-h-screen flex flex-col md:flex-row">
        <!-- Left side - Background image -->
        <div class="md:w-1/2 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="bg-black bg-opacity-40 h-full flex flex-col justify-center p-12">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 font-serif">Welcome to Panglao Resorts</h1>
                <p class="text-xl text-white mb-8">Experience luxury by the ocean in beautiful Panglao, Bohol</p>
                <div class="flex items-center">
                    <div class="w-12 h-1 bg-amber-400 mr-4"></div>
                    <p class="text-white italic">Your paradise getaway awaits</p>
                </div>
            </div>
        </div>

        <!-- Right side - Login form -->
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

                <!-- Session Status -->
                <x-auth-session-status class="mb-4 p-4 bg-blue-50 text-blue-700 rounded-lg" :status="session('status')" />

                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Sign in to your account</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="mb-4">
                            <x-input-label for="email" :value="__('Email')" class="block text-sm font-medium text-gray-700 mb-1" />
                            <x-text-input 
                                id="email" 
                                class="block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition duration-200" 
                                type="email" 
                                name="email" 
                                :value="old('email')" 
                                required 
                                autofocus 
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
                                autocomplete="current-password"
                                placeholder="Enter your password"
                            />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center">
                                <input id="remember_me" type="checkbox" class="h-4 w-4 text-amber-500 focus:ring-amber-500 border-gray-300 rounded" name="remember">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                    {{ __('Remember me') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-amber-600 hover:text-amber-500 transition duration-200" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-amber-500 hover:bg-amber-600 text-white font-medium py-3 px-4 rounded-lg transition duration-200 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2">
                            {{ __('Log in') }}
                        </button>

                        <!-- Register Link -->
                        @if (Route::has('register'))
                            <div class="mt-6 text-center">
                                <p class="text-sm text-gray-600">
                                    Don't have an account?
                                    <a href="{{ route('register') }}" class="font-medium text-amber-600 hover:text-amber-500 transition duration-200">
                                        {{ __('Register') }}
                                    </a>
                                </p>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
