<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'RPLANTERZ â€” RBS Planterz Agri-Supply')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col">
    @auth
    <nav class="bg-emerald-900 text-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center gap-6">
                <span class="font-bold tracking-wide text-lg">RPLANTERZ</span>
                @if(auth()->user()->role === 'owner')
                    <a href="{{ route('owner.dashboard') }}" class="text-lg hover:text-emerald-200">Dashboard</a>
                    <a href="{{ route('owner.branches.index') }}" class="text-lg hover:text-emerald-200">Branches</a>
                    <a href="{{ route('owner.employees.index') }}" class="text-lg hover:text-emerald-200">Employees</a>
                    <a href="{{ route('owner.activity-logs.index') }}" class="text-lg hover:text-emerald-200">Activity Logs</a>
                @elseif(auth()->user()->role === 'cashier')
                    <a href="{{ route('cashier.pos') }}" class="text-lg hover:text-emerald-200">POS Terminal</a>
                @elseif(auth()->user()->role === 'checker')
                    <a href="{{ route('checker.inventory') }}" class="text-lg hover:text-emerald-200">Inventory</a>
                @endif
            </div>
            <div class="flex items-center gap-4 text-lg">
                <span class="text-emerald-200">{{ auth()->user()->name }} ({{ ucfirst(auth()->user()->role) }})</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-emerald-800 hover:bg-emerald-700 px-3 py-1.5 rounded text-lg font-medium">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>
    @endauth

    <main class="flex-1 max-w-7xl w-full mx-auto px-4 py-6">
        @if(session('success'))
            <div class="mb-4 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 text-lg">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-4 rounded-lg bg-red-50 border border-red-200 text-red-700 px-4 py-3 text-lg">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
