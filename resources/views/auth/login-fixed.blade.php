@extends('layouts.auth')

@section('content')
<div class="w-full max-w-md space-y-8">
    <!-- Header -->
    <div class="text-center">
        <h1 class="text-4xl font-bold text-white mb-2">Your Voice</h1>
        <p class="text-lg text-gray-200">Your tool for measuring and understanding satisfaction.</p>
    </div>

    <!-- Login Form Card -->
    <div class="glass-effect rounded-2xl p-8 shadow-2xl">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-semibold text-white mb-2">Welcome back</h2>
            <p class="text-gray-300">Enter your credentials to access your workspace</p>
            <div class="flex items-center justify-center mt-4">
                <span class="text-orange-400">✦</span>
                <span class="text-gray-300 ml-2">Frame</span>
            </div>
        </div>

        <!-- Tab Navigation -->
        <div class="flex mb-6">
            <button class="tab-button active">
                Sign In
            </button>
            <a href="{{ route('register') }}" class="tab-button">
                Sign Up
            </a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-500/20 border border-green-500 rounded-lg p-4 mb-6">
                <p class="text-green-400 text-sm text-center">{{ session('success') }}</p>
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login.post') }}" class="space-y-6">
            @csrf
            
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                        </svg>
                    </span>
                    <input 
                        id="email" 
                        name="email" 
                        type="email" 
                        required 
                        class="w-full pl-10 pr-4 py-3 bg-black/20 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition-all"
                        placeholder="Enter your Email"
                        value="{{ old('email') }}"
                    >
                </div>
                @error('email')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                <input 
                    id="password" 
                    name="password" 
                    type="password" 
                    required 
                    class="w-full px-4 py-3 bg-black/20 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition-all"
                    placeholder="Enter your Password"
                >
                @error('password')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-between">
                <a href="{{ route('password.request') }}" class="text-sm text-gray-300 hover:text-white transition-colors">
                    Forgot my password
                </a>
                <button 
                    type="submit"
                    class="px-8 py-3 bg-white text-black font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all"
                >
                    Sign In
                </button>
            </div>
        </form>
    </div>
</div>
@endsection