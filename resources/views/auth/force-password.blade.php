@extends('layouts.app')

@section('title', 'Change Temporary Password â€” RPLANTERZ')

@section('content')
<div class="max-w-md mx-auto mt-12 bg-white p-8 rounded-xl border border-amber-300 shadow-sm">
    <span class="inline-block px-2.5 py-0.5 text-lg font-semibold bg-amber-100 text-amber-800 rounded mb-2">First-Time Login Security</span>
    <h1 class="text-xl font-bold text-slate-900 mb-1">Set Your New Password</h1>
    <p class="text-lg text-slate-600 mb-6">You must change your temporary password before accessing your workspace.</p>

    <form method="POST" action="{{ route('password.change.update') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-lg font-medium text-slate-700 mb-1">New Password (min. 8 characters)</label>
            <input type="password" name="password" required
                class="w-full rounded-lg border-slate-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600">
        </div>
        <div>
            <label class="block text-lg font-medium text-slate-700 mb-1">Confirm New Password</label>
            <input type="password" name="password_confirmation" required
                class="w-full rounded-lg border-slate-300 shadow-sm focus:border-emerald-600 focus:ring-emerald-600">
        </div>
        <button type="submit" class="w-full bg-emerald-800 hover:bg-emerald-700 text-white font-medium py-2.5 rounded-lg">
            Update Password &amp; Continue
        </button>
    </form>
</div>
@endsection
