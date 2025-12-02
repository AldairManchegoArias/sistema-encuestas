@extends('layouts.auth')

@section('content')
<div class="w-full max-w-md space-y-8">
    <!-- Header -->
    <div class="text-center">
        <h1 class="text-4xl font-bold text-white mb-2">Your voice system</h1>
        <p class="text-lg text-gray-200">Your tool for measuring and understanding satisfaction.</p>
    </div>

    <!-- Register Form Card -->
    <div class="glass-effect rounded-2xl p-8 shadow-2xl">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-semibold text-white mb-2">Create your workspace</h2>
            <p class="text-gray-300">Register a new user and owner account to get started</p>
        </div>

        <!-- Tab Navigation -->
        <div class="flex mb-6">
            <a href="{{ route('login') }}" class="tab-button">
                Sign In
            </a>
            <button class="tab-button active">
                Sign Up
            </button>
        </div>

        <!-- Info Message -->
        <div class="bg-black/20 border border-gray-600 rounded-lg p-4 mb-6">
            <p class="text-gray-300 text-sm text-center">
                You will create a new tenant and a primary administrator user for your organization.
            </p>
        </div>

        <!-- Register Form -->
        <form method="POST" action="{{ route('register.post') }}" class="space-y-6">
            @csrf
            
            <!-- Company Name -->
            <div>
                <label for="company_name" class="block text-sm font-medium text-gray-300 mb-2">Company name</label>
                <input 
                    id="company_name" 
                    name="company_name" 
                    type="text" 
                    required 
                    class="w-full px-4 py-3 bg-black/20 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition-all"
                    placeholder="Acme Corporation"
                    value="{{ old('company_name') }}"
                >
                @error('company_name')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Your Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Your name</label>
                <input 
                    id="name" 
                    name="name" 
                    type="text" 
                    required 
                    class="w-full px-4 py-3 bg-black/20 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition-all"
                    placeholder="Jane Williams"
                    value="{{ old('name') }}"
                >
                @error('name')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- CC/NIT -->
            <div>
                <label for="identification" class="block text-sm font-medium text-gray-300 mb-2">CC/NIT</label>
                <input 
                    id="identification" 
                    name="identification" 
                    type="text" 
                    required 
                    class="w-full px-4 py-3 bg-black/20 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition-all"
                    placeholder="Identification number"
                    value="{{ old('identification') }}"
                >
                @error('identification')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                <input 
                    id="email" 
                    name="email" 
                    type="email" 
                    required 
                    class="w-full px-4 py-3 bg-black/20 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition-all"
                    placeholder="jane@company.com"
                    value="{{ old('email') }}"
                >
                @error('email')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Phone -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">Teléfono</label>
                <input 
                    id="phone" 
                    name="phone" 
                    type="tel" 
                    required 
                    class="w-full px-4 py-3 bg-black/20 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition-all"
                    placeholder="jane@company.com"
                    value="{{ old('phone') }}"
                >
                @error('phone')
                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Fields -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input 
                        id="password" 
                        name="password" 
                        type="password" 
                        required 
                        class="w-full px-4 py-3 bg-black/20 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition-all"
                        placeholder="Create a password"
                    >
                    @error('password')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirm Password</label>
                    <input 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        type="password" 
                        required 
                        class="w-full px-4 py-3 bg-black/20 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-transparent transition-all"
                        placeholder="Repeat your password"
                    >
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button 
                    type="submit"
                    class="w-full py-3 bg-white text-black font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-all"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection