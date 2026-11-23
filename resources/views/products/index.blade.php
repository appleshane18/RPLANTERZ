<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products â€“ RPLANTERZ</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body { font-family: 'Poppins', sans-serif; }</style>
</head>
<body class="bg-gray-100 min-h-screen flex">

{{-- Left Sidebar --}}
<aside class="w-52 min-h-screen bg-green-900 flex flex-col fixed left-0 top-0 z-30">
    {{-- Logo --}}
    <div class="px-4 py-4 border-b border-green-800">
        <div class="flex items-center gap-2">
            <div class="flex items-center">
                <svg class="w-7 h-7 text-green-300" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
                </svg>
                <svg class="w-5 h-5 text-green-400 -ml-2 mt-1.5" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
                </svg>
            </div>
            <div>
                <div class="text-white font-bold text-lg leading-tight tracking-wide">RPLANTERZ</div>
                <div class="text-green-400 text-lg leading-tight">RBS Planterz Agri-Supply</div>
            </div>
        </div>
    </div>

    {{-- Nav --}}
    <nav class="px-3 py-4 flex-1">
        <a href="{{ route('products.index') }}"
           class="flex items-center gap-3 bg-green-700 text-white px-3 py-2.5 rounded-lg text-lg font-semibold">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M5.5 21c-.8 0-1.5-.7-1.5-1.5v-9h16v9c0 .8-.7 1.5-1.5 1.5h-13zM22 7.5h-3.3L14 1.1 12.6 2l3.4 5.5H8L11.4 2 10 1.1 5.3 7.5H2v2h20v-2z"/>
            </svg>
            Products
        </a>
        {{-- Home Button para makabalik ang user --}}
        <a href="{{ url('/') }}"
           class="flex items-center gap-3 text-green-100 hover:bg-green-800 hover:text-white px-3 py-2.5 rounded-lg text-lg font-semibold mt-2 transition-colors">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 3L4 9v12h16V9l-8-6zm6 16h-3v-6H9v6H6v-9.5l6-4.5 6 4.5V19z"/>
            </svg>
            Back to Home
        </a>
    </nav>

    {{-- Illustration + tagline --}}
    <div class="px-4 pb-4 text-center">
        <svg class="w-24 h-24 text-green-600/50 mx-auto mb-3" viewBox="0 0 100 100" fill="currentColor">
            <ellipse cx="50" cy="85" rx="30" ry="5" fill="currentColor" opacity="0.3"/>
            <rect x="47" y="45" width="6" height="40" rx="3"/>
            <path d="M50 45 C50 45 30 35 25 15 C35 20 45 30 50 45Z"/>
            <path d="M50 55 C50 55 70 45 75 25 C65 30 55 40 50 55Z"/>
            <path d="M50 60 C50 60 35 52 30 38 C40 42 47 52 50 60Z"/>
        </svg>
        <p class="text-green-300 text-lg italic leading-snug">Growing together,<br>Harvesting success.</p>
    </div>

    {{-- Footer --}}
    <div class="px-4 py-3 border-t border-green-800">
        <p class="text-green-500 text-lg">Â© 2026 RPLANTERZ</p>
        <p class="text-green-500 text-lg">All rights reserved.</p>
    </div>
</aside>

{{-- Main content --}}
<div class="ml-52 flex-1 flex flex-col min-h-screen">

    {{-- Top header --}}
    <header class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between sticky top-0 z-20 shadow-sm">
        <div class="flex items-center gap-4">
            <button class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            <div>
                <h1 class="text-lg font-bold text-gray-800 leading-tight">Products</h1>
                <p class="text-lg text-gray-400">View real-time stock availability for all products.</p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            {{-- Notification bell --}}
            <button class="relative text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-lg w-4 h-4 rounded-full flex items-center justify-center font-bold">3</span>
            </button>
            {{-- User --}}
            <div class="flex items-center gap-2 cursor-pointer">
                <div class="w-8 h-8 rounded-full bg-green-800 flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                    </svg>
                </div>
                {{-- GINAMIT ANG NULLSAFE OPERATOR PARA HINDI MAG-ERROR SA GUESTS --}}
                <span class="text-lg font-medium text-gray-700">Welcome, {{ auth()->user()?->name ?? 'Customer' }}</span>
                <svg class="w-4 h-4 text-gray-400" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M7 10l5 5 5-5z"/>
                </svg>
            </div>
        </div>
    </header>

    {{-- Content area --}}
    <div class="flex flex-1 gap-4 p-5">

        {{-- Products column --}}
        <div class="flex-1 min-w-0">

            {{-- Search & filters --}}
            <div class="flex flex-wrap items-center gap-3 mb-3">
                <div class="relative flex-1 min-w-48">
                        <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
                            </svg>
                        </span>
                    <input type="text" placeholder="Search products by name or code..."
                           class="w-full pl-9 pr-4 py-2.5 border border-gray-300 rounded-lg text-lg focus:outline-none focus:ring-2 focus:ring-green-500 bg-white">
                </div>
                <select class="border border-gray-300 rounded-lg px-3 py-2.5 text-lg bg-white focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option>All Categories</option>
                    <option>Fertilizer</option>
                    <option>Seeds</option>
                    <option>Crop Protection</option>
                    <option>Feeds</option>
                    <option>Soil &amp; Media</option>
                </select>
                <select class="border border-gray-300 rounded-lg px-3 py-2.5 text-lg bg-white focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option>All Brands</option>
                </select>
                <select class="border border-gray-300 rounded-lg px-3 py-2.5 text-lg bg-white focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option>Sort by: Name (A-Z)</option>
                    <option>Sort by: Name (Z-A)</option>
                    <option>Sort by: Price (Low-High)</option>
                    <option>Sort by: Price (High-Low)</option>
                    <option>Sort by: Stock (High-Low)</option>
                </select>
            </div>

            {{-- Live indicator + view toggle --}}
            <div class="flex items-center justify-between mb-3">
                    <span class="text-lg text-gray-400">
                        Last updated: {{ now()->format('M d, Y g:i A') }}
                        <span class="inline-flex items-center gap-1 ml-2 text-green-600 font-semibold">
                            <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse inline-block"></span>
                            Live
                        </span>
                    </span>
                <div class="flex items-center gap-1">
                    <button class="p-1.5 rounded bg-green-700 text-white">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 3h7v7H3zm11 0h7v7h-7zM3 14h7v7H3zm11 0h7v7h-7z"/>
                        </svg>
                    </button>
                    <button class="p-1.5 rounded text-gray-400 hover:bg-gray-200">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/>
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Tip banner --}}
            <div class="bg-yellow-50 border border-yellow-200 rounded-lg px-4 py-2.5 flex items-center gap-2 text-lg text-yellow-800 mb-4">
                <span>ðŸ’¡</span>
                <span>Tip: You can search by product name or code to view stock availability.</span>
            </div>

            {{-- Product grid --}}
            <div class="grid grid-cols-2 xl:grid-cols-4 gap-4 mb-6">
                @php
                    $products = [
                        ['name'=>'Urea Fertilizer 50kg','category'=>'Fertilizer','price'=>'500.00','stock'=>45,'unit'=>'bags','branches'=>'Kabacan (45), Mlang (20)'],
                        ['name'=>'Seeds Corn Hybrid','category'=>'Seeds','price'=>'250.00','stock'=>12,'unit'=>'bags','branches'=>'Kabacan (12)'],
                        ['name'=>'Pesticide (500ml)','category'=>'Crop Protection','price'=>'350.00','stock'=>8,'unit'=>'bottles','branches'=>'Kabacan (8), Mlang (2)'],
                        ['name'=>'Complete Feed 50kg','category'=>'Feeds','price'=>'650.00','stock'=>45,'unit'=>'sacks','branches'=>'Kabacan (30), Mlang (2)'],
                        ['name'=>'Organic Fertilizer 25kg','category'=>'Fertilizer','price'=>'400.00','stock'=>18,'unit'=>'bags','branches'=>'Kabacan (12), Mlang (6)'],
                        ['name'=>'Insecticide 1L','category'=>'Crop Protection','price'=>'450.00','stock'=>30,'unit'=>'bottles','branches'=>'Kabacan (20), Mlang (10)'],
                        ['name'=>'Rice Seed 25kg','category'=>'Seeds','price'=>'600.00','stock'=>55,'unit'=>'bags','branches'=>'Kabacan (30), Mlang (25)'],
                        ['name'=>'Potting Mix 20kg','category'=>'Soil & Media','price'=>'280.00','stock'=>90,'unit'=>'bags','branches'=>'Kabacan (60), Mlang (25)'],
                    ];
                    $categoryColors = [
                        'Fertilizer'=>'text-green-600','Seeds'=>'text-green-500','Crop Protection'=>'text-green-600',
                        'Feeds'=>'text-green-600','Soil & Media'=>'text-green-700',
                    ];
                @endphp

                @foreach($products as $product)
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 hover:shadow-md transition-shadow">
                        {{-- Product image placeholder --}}
                        <div class="w-full h-28 bg-gray-100 rounded-lg mb-3 flex items-center justify-center overflow-hidden">
                            @if(!empty($product['image']))
                                <img src="{{ asset('storage/'.$product['image']) }}" alt="{{ $product['name'] }}" class="h-full w-full object-contain">
                            @else
                                <svg class="w-12 h-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2-8 2 4 0 8 4 8 8 0-5-1-13-5-3z"/>
                                </svg>
                            @endif
                        </div>

                        <h3 class="font-bold text-gray-800 text-lg leading-tight mb-0.5">{{ $product['name'] }}</h3>
                        <p class="text-lg {{ $categoryColors[$product['category']] ?? 'text-green-600' }} font-medium mb-1">{{ $product['category'] }}</p>
                        <p class="text-lg font-bold text-gray-800 mb-3">â‚±{{ $product['price'] }}</p>

                        <div class="h-px bg-gray-100 mb-3"></div>

                        <p class="text-lg text-gray-400 mb-1">Stock Available</p>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-lg font-bold text-green-600">{{ $product['stock'] }} {{ $product['unit'] }}</span>
                            @if($product['stock'] > 10)
                                <span class="bg-green-100 text-green-700 text-lg font-semibold px-2 py-0.5 rounded-full">In Stock</span>
                            @elseif($product['stock'] > 0)
                                <span class="bg-yellow-100 text-yellow-700 text-lg font-semibold px-2 py-0.5 rounded-full">Low Stock</span>
                            @else
                                <span class="bg-red-100 text-red-600 text-lg font-semibold px-2 py-0.5 rounded-full">Out of Stock</span>
                            @endif
                        </div>
                        <p class="text-lg text-gray-500"><span class="font-semibold text-gray-700">Branches with Stock:</span> {{ $product['branches'] }}</p>
                    </div>
                @endforeach
            </div>

            {{-- Stock Availability Guide --}}
            <div class="bg-white rounded-xl border border-gray-100 px-5 py-3 flex flex-wrap items-center gap-6 shadow-sm">
                <div class="flex items-center gap-2 text-gray-600 font-semibold text-lg">
                    <svg class="w-5 h-5 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    </svg>
                    Stock Availability Guide
                </div>
                <div class="h-5 w-px bg-gray-200"></div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-green-500 rounded-full"></span>
                    <div>
                        <p class="text-lg font-semibold text-gray-700">In Stock</p>
                        <p class="text-lg text-gray-400">Sufficient stock available</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-yellow-400 rounded-full"></span>
                    <div>
                        <p class="text-lg font-semibold text-gray-700">Low Stock</p>
                        <p class="text-lg text-gray-400">Almost reaching reorder level</p>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <span class="w-3 h-3 bg-red-500 rounded-full"></span>
                    <div>
                        <p class="text-lg font-semibold text-gray-700">Out of Stock</p>
                        <p class="text-lg text-gray-400">Currently unavailable</p>
                    </div>
                </div>
                <p class="text-lg text-gray-400 ml-auto">
                    <span class="font-semibold text-gray-600">Note:</span> Stocks are updated in real-time.<br>
                    Please check product details for branch availability.
                </p>
            </div>

        </div>

        {{-- Right sidebar: Contact --}}
        <aside class="w-64 shrink-0">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-green-800 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-gray-800 text-lg">CONTACT THE OWNER</p>
                        <p class="text-lg text-gray-400 leading-snug">Have questions or need assistance?<br>Feel free to reach out to us.</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-700 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <div>
                            <p class="text-lg font-semibold text-gray-700">Phone</p>
                            <p class="text-lg text-gray-500">+63 912 345 6789</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-700 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <div>
                            <p class="text-lg font-semibold text-gray-700">Email</p>
                            <p class="text-lg text-gray-500">rbsplanterz@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-blue-600 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        <div>
                            <p class="text-lg font-semibold text-gray-700">Facebook</p>
                            <p class="text-lg text-gray-500">RPLANTERZ Agri-Supply</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-700 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                        <div>
                            <p class="text-lg font-semibold text-gray-700">Address</p>
                            <p class="text-lg text-gray-500">Poblacion, Kabacan, Cotabato,<br>Philippines 9407</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-green-700 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z"/>
                        </svg>
                        <div>
                            <p class="text-lg font-semibold text-gray-700">Business Hours</p>
                            <p class="text-lg text-gray-500">Monday - Saturday<br>8:00 AM â€“ 5:00 PM</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 pt-4 border-t border-gray-100">
                    <p class="text-lg text-gray-400 italic">We're here to help you grow better every day.</p>
                </div>
            </div>
        </aside>

    </div>
</div>

</body>
</html>
