<?php

namespace App\Http\Controllers;

use App\Helpers\ActivityLogger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin(Request $request)
    {
        $portal = $request->query('portal', 'employee'); // owner | employee
        return view('auth.login', compact('portal'));
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors([
                'email' => 'Invalid email address or password.',
            ])->onlyInput('email');
        }

        $user = Auth::user();

        if (isset($user->status) && strtolower((string) $user->status) !== 'active') {
            Auth::logout();
            return back()->withErrors([
                'email' => 'Your account is currently inactive. Contact the Owner.',
            ])->onlyInput('email');
        }

        $request->session()->regenerate();
        ActivityLogger::log('Logged in to system', 'Authentication', $user->user_id, $user->branch_id);

        if ($user->must_change_password) {
            return redirect()->route('password.change');
        }

        return $this->redirectByRole($user->role);
    }

    public function showForcePasswordChange()
    {
        if (! Auth::user()->must_change_password) {
            return $this->redirectByRole(Auth::user()->role);
        }

        return view('auth.force-password-change');
    }

    public function updateForcePasswordChange(Request $request)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->must_change_password = false;
        $user->save();

        ActivityLogger::log('Changed temporary password on first login', 'Authentication', $user->user_id, $user->branch_id);

        return $this->redirectByRole($user->role)
            ->with('success', 'Password updated successfully.');
    }

    public function logout(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            ActivityLogger::log('Logged out of system', 'Authentication', $user->user_id, $user->branch_id);
        }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('landing');
    }

    protected function redirectByRole(string $role)
    {
        return match ($role) {
            'owner' => redirect()->route('owner.dashboard'),
            'cashier' => redirect()->route('cashier.pos'),
            'checker' => redirect()->route('checker.inventory'),
            default => redirect()->route('landing'),
        };
    }
}
