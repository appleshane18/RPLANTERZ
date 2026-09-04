<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPLANTERZ – RBS Planterz Agri-Supply</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-gray-50">

{{-- Header --}}
<header class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between sticky top-0 z-50 shadow-sm">
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
            <div class="text-xl font-bold text-green-800 leading-tight tracking-wide">RPLANTERZ</div>
            <div class="text-xs text-gray-500 leading-tight">RBS Planterz Agri-Supply</div>
        </div>
    </div>
    <nav class="flex items-center gap-6">
        <a href="#about" class="flex items-center gap-1.5 text-gray-600 hover:text-green-700 transition-colors text-sm font-medium">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
            </svg>
            About Us
        </a>
        <a href="#contact" class="flex items-center gap-1.5 border-2 border-green-700 text-green-700 hover:bg-green-700 hover:text-white transition-colors px-4 py-1.5 rounded-md text-sm font-medium">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
            </svg>
            Contact Us
        </a>
    </nav>
</header>

{{-- Hero --}}
<section
    class="relative flex-1 flex flex-col items-center justify-center text-center px-6 py-16"
    style="background-image: url('https://images.unsplash.com/photo-1776687289197-3ca6321d9928?w=1920&q=80'); background-size: cover; background-position: center; min-height: calc(100vh - 65px);"
>
    {{-- Overlay --}}
    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative z-10 w-full max-w-5xl mx-auto">
        <p class="text-green-400 text-base mb-2 italic">Welcome to</p>

        <div class="flex items-center justify-center gap-2 mb-1">
            <svg class="w-12 h-12 text-green-400" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
            </svg>
            <h1 class="text-7xl md:text-8xl font-extrabold text-white tracking-wider leading-none">PLANTERZ</h1>
        </div>

        <p class="text-green-400 text-xl italic font-semibold mb-3">RBS Planterz Agri-Supply</p>

        <div class="flex items-center justify-center gap-3 mb-5">
            <div class="h-px w-24 bg-green-400/60"></div>
            <svg class="w-5 h-5 text-green-400" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
            </svg>
            <div class="h-px w-24 bg-green-400/60"></div>
        </div>

        <p class="text-white/85 text-base max-w-md mx-auto mb-10 leading-relaxed">
            Your trusted partner for quality agricultural products and farming solutions.
        </p>

        <h2 class="text-3xl md:text-4xl font-bold text-white mb-2">How would you like to continue?</h2>
        <p class="text-white/70 text-sm mb-10">Please choose an option to proceed.</p>

        {{-- Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            {{-- Admin Login --}}
            <div class="bg-white rounded-2xl p-7 flex flex-col text-left shadow-xl hover:-translate-y-1.5 transition-transform duration-200">
                <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mb-5 mx-auto">
                    <svg class="w-8 h-8 text-green-700" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 4a3 3 0 1 1 0 6 3 3 0 0 1 0-6zm0 13c-2.67 0-8 1.34-8 4v.72A10.84 10.84 0 0 0 12 23a10.84 10.84 0 0 0 8-2.28V19c0-2.66-5.33-4-8-4z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-green-800 text-center mb-2">Admin Login</h3>
                <p class="text-gray-500 text-sm text-center mb-5 leading-relaxed">
                    Access the administration dashboard and manage the entire system.
                </p>
                <div class="h-px bg-gray-100 mb-5"></div>
                <ul class="space-y-2.5 mb-7">
                    @foreach(['Manage users and roles', 'View reports and analytics', 'System settings and configuration'] as $feature)
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mt-0.5 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('login') }}"
                   class="mt-auto w-full bg-green-700 hover:bg-green-800 text-white font-semibold py-3 rounded-lg flex items-center justify-center gap-2 transition-colors">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/>
                    </svg>
                    Login as Admin
                </a>
            </div>

            {{-- Employee Login --}}
            <div class="bg-white rounded-2xl p-7 flex flex-col text-left shadow-xl hover:-translate-y-1.5 transition-transform duration-200">
                <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-5 mx-auto">
                    <svg class="w-8 h-8 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-blue-700 text-center mb-2">Employee Login</h3>
                <p class="text-gray-500 text-sm text-center mb-5 leading-relaxed">
                    Access your assigned modules and perform daily tasks.
                </p>
                <div class="h-px bg-gray-100 mb-5"></div>
                <ul class="space-y-2.5 mb-7">
                    @foreach(['Process sales (POS)', 'Manage inventory', 'View assigned tasks'] as $feature)
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mt-0.5 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('login') }}"
                   class="mt-auto w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg flex items-center justify-center gap-2 transition-colors">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                    Login as Employee
                </a>
            </div>

            {{-- Browse Products --}}
            <div class="bg-white rounded-2xl p-7 flex flex-col text-left shadow-xl hover:-translate-y-1.5 transition-transform duration-200">
                <div class="w-16 h-16 rounded-full bg-orange-100 flex items-center justify-center mb-5 mx-auto">
                    <svg class="w-8 h-8 text-orange-500" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M5.5 21c-.8 0-1.5-.7-1.5-1.5v-9h16v9c0 .8-.7 1.5-1.5 1.5h-13zM22 7.5h-3.3L14 1.1 12.6 2l3.4 5.5H8L11.4 2 10 1.1 5.3 7.5H2v2h20v-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-orange-500 text-center mb-2">Browse Products</h3>
                <p class="text-gray-500 text-sm text-center mb-5 leading-relaxed">
                    Explore our products and check current availability.
                </p>
                <div class="h-px bg-gray-100 mb-5"></div>
                <ul class="space-y-2.5 mb-7">
                    @foreach(['View product catalog', 'Check current availability', 'No account required'] as $feature)
                        <li class="flex items-start gap-2 text-sm text-gray-600">
                            <svg class="w-4 h-4 text-green-600 mt-0.5 shrink-0" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                            </svg>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('products.index') }}"
                   class="mt-auto w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 rounded-lg flex items-center justify-center gap-2 transition-colors">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                    </svg>
                    Browse Products
                </a>
            </div>

        </div>
    </div>
</section>

{{-- Footer --}}
<footer class="bg-gray-100 border-t border-gray-200 py-4 text-center">
    <p class="text-gray-500 text-sm">© 2024 RPLANTERZ – RBS Planterz Agri-Supply. All rights reserved.</p>
    <p class="text-green-600 text-sm italic font-semibold mt-1">
        Growing Together, Harvesting Success.
        <svg class="w-4 h-4 inline ml-1" viewBox="0 0 24 24" fill="currentColor">
            <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
        </svg>
    </p>
</footer>

</body>
</html>
