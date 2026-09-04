<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login – RPLANTERZ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="min-h-screen flex flex-col bg-gray-50">

{{-- Header --}}
<header class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between shadow-sm">
    <div class="flex items-center gap-3">
        <div class="flex items-center">
            <svg class="w-8 h-8 text-green-700" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
            </svg>
            <svg class="w-5 h-5 text-green-500 -ml-2 mt-2" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
            </svg>
        </div>
        <div>
            <div class="text-xl font-bold text-green-800 tracking-wide leading-tight">RPLANTERZ</div>
            <div class="text-xs text-gray-500 leading-tight">RBS Planterz Agri-Supply</div>
        </div>
    </div>
    {{-- FIX: Pinalitan ang route('home') ng url('/') --}}
    <a href="{{ url('/') }}" class="flex items-center gap-1.5 text-gray-600 hover:text-green-700 transition-colors text-sm font-medium">
        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
        </svg>
        Back to Home
    </a>
</header>

{{-- Main --}}
<main class="flex-1 flex flex-col">
    <div class="flex flex-1">

        {{-- Left panel: farm image + branding --}}
        <div
            class="hidden lg:flex w-[55%] relative flex-col items-center justify-center text-center p-10"
            style="background-image: url('https://images.unsplash.com/photo-1776687289197-3ca6321d9928?w=1200&q=80'); background-size: cover; background-position: center;"
        >
            <div class="absolute inset-0 bg-white/30"></div>
            <div class="relative z-10 max-w-md">
                <p class="text-green-800 font-semibold text-sm mb-1">Welcome to</p>
                <div class="flex items-center justify-center gap-2 mb-1">
                    <svg class="w-9 h-9 text-green-700" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
                    </svg>
                    <h1 class="text-6xl font-extrabold text-green-800 tracking-wide leading-none">PLANTERZ</h1>
                </div>
                <p class="text-green-700 font-semibold italic text-lg mb-4">RBS Planterz Agri-Supply</p>
                <div class="flex items-center justify-center gap-3 mb-5">
                    <div class="h-px w-20 bg-green-600/40"></div>
                    <svg class="w-4 h-4 text-green-600" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
                    </svg>
                    <div class="h-px w-20 bg-green-600/40"></div>
                </div>
                <p class="text-gray-700 text-sm leading-relaxed mb-10">
                    Your trusted partner for quality agricultural products and farming solutions.
                </p>

                {{-- Three feature cards --}}
                <div class="grid grid-cols-3 gap-3">
                    <div class="bg-white/80 backdrop-blur rounded-xl p-4 text-center shadow">
                        <svg class="w-8 h-8 text-green-700 mx-auto mb-2" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 13l-3-3 1.41-1.41L10 11.17l5.59-5.58L17 7l-7 7z"/>
                        </svg>
                        <p class="font-bold text-green-800 text-sm">Trusted</p>
                        <p class="text-gray-500 text-xs mt-1 leading-snug">Reliable solutions for your business</p>
                    </div>
                    <div class="bg-white/80 backdrop-blur rounded-xl p-4 text-center shadow">
                        <svg class="w-8 h-8 text-green-700 mx-auto mb-2" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
                        </svg>
                        <p class="font-bold text-green-800 text-sm">Quality</p>
                        <p class="text-gray-500 text-xs mt-1 leading-snug">Quality products for better harvest</p>
                    </div>
                    <div class="bg-white/80 backdrop-blur rounded-xl p-4 text-center shadow">
                        <svg class="w-8 h-8 text-green-700 mx-auto mb-2" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                        </svg>
                        <p class="font-bold text-green-800 text-sm">Growth</p>
                        <p class="text-gray-500 text-xs mt-1 leading-snug">Growing together, harvesting success</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Right panel: login form --}}
        <div class="flex-1 flex items-center justify-center p-8">
            <div class="bg-white rounded-2xl shadow-xl p-8 w-full max-w-md">

                {{-- Avatar icon --}}
                <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-5">
                    <svg class="w-10 h-10 text-green-700" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                    </svg>
                </div>

                <h2 class="text-2xl font-bold text-gray-800 text-center mb-1">Login</h2>
                <p class="text-gray-400 text-sm text-center mb-7">Welcome back! Please login to your account.</p>

                {{-- Validation errors (Breeze) --}}
                @if ($errors->any())
                    <div class="mb-4 p-3 bg-red-50 border border-red-200 rounded-lg text-red-600 text-sm">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- Username / Email --}}
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Username or Email</label>
                        <div class="relative">
                                <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                </span>
                            <input
                                type="text"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Enter your email"
                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('email') border-red-400 @enderror"
                                required autofocus
                            >
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <div class="relative">
                                <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
                                    </svg>
                                </span>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Enter your password"
                                class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent @error('password') border-red-400 @enderror"
                                required
                            >
                            <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-3 flex items-center text-gray-400 hover:text-gray-600">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- Remember me + Forgot password --}}
                    <div class="flex items-center justify-between mb-6">
                        <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
                            <input type="checkbox" name="remember" class="w-4 h-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                            Remember me
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-green-700 font-medium hover:underline">
                                Forgot Password?
                            </a>
                        @endif
                    </div>

                    {{-- Login button --}}
                    <button type="submit"
                            class="w-full bg-green-800 hover:bg-green-900 text-white font-semibold py-3 rounded-lg flex items-center justify-center gap-2 transition-colors mb-5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
                        </svg>
                        Login
                    </button>

                    {{-- Or continue as --}}
                    <div class="flex items-center gap-3 mb-5">
                        <div class="flex-1 h-px bg-gray-200"></div>
                        <span class="text-xs text-gray-400">or continue as</span>
                        <div class="flex-1 h-px bg-gray-200"></div>
                    </div>

                    <div class="grid grid-cols-3 gap-3 mb-6">
                        <a href="{{ route('login') }}?role=admin"
                           class="flex flex-col items-center gap-1.5 border border-gray-200 rounded-xl py-3 hover:bg-green-50 hover:border-green-300 transition-colors">
                            <svg class="w-6 h-6 text-green-700" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 13l-3-3 1.41-1.41L10 11.17l5.59-5.58L17 7l-7 7z"/>
                            </svg>
                            <span class="text-xs font-semibold text-green-700">Admin Login</span>
                        </a>
                        <a href="{{ route('login') }}?role=employee"
                           class="flex flex-col items-center gap-1.5 border border-gray-200 rounded-xl py-3 hover:bg-blue-50 hover:border-blue-300 transition-colors">
                            <svg class="w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                            </svg>
                            <span class="text-xs font-semibold text-blue-600">Employee Login</span>
                        </a>
                        {{-- FIX: Pinalitan ang route('products.index') ng '#' pansamantala --}}
                        <a href="#"
                           class="flex flex-col items-center gap-1.5 border border-gray-200 rounded-xl py-3 hover:bg-orange-50 hover:border-orange-300 transition-colors">
                            <svg class="w-6 h-6 text-orange-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5.5 21c-.8 0-1.5-.7-1.5-1.5v-9h16v9c0 .8-.7 1.5-1.5 1.5h-13zM22 7.5h-3.3L14 1.1 12.6 2l3.4 5.5H8L11.4 2 10 1.1 5.3 7.5H2v2h20v-2z"/>
                            </svg>
                            <span class="text-xs font-semibold text-orange-500">Browse Products</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>

{{-- Footer --}}
<footer class="bg-gray-100 border-t border-gray-200 py-4 text-center">
    <p class="text-gray-500 text-sm">© 2026 RPLANTERZ – RBS Planterz Agri-Supply. All rights reserved.</p>
    <p class="text-green-600 text-sm italic font-semibold mt-1">
        Growing Together, Harvesting Success.
        <svg class="w-4 h-4 inline ml-1" viewBox="0 0 24 24" fill="currentColor">
            <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
        </svg>
    </p>
</footer>

<script>
    function togglePassword() {
        const input = document.getElementById('password');
        input.type = input.type === 'password' ? 'text' : 'password';
    }
</script>

</body>
</html>
