<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeAccountController extends Controller
{
    public function index()
    {
        $employees = User::whereIn('role', ['Cashier', 'Checker'])->with('branch')->get();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $branches = Branch::all();
        return view('employees.create', compact('branches'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'role' => ['required', 'in:Cashier,Checker'],
            'branch_id' => ['required', 'exists:branches,branch_id'],
        ]);

        $tempPassword = Str::random(10);

        $user = User::create([
            'branch_id' => $request->branch_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($tempPassword),
            'role' => $request->role,
            'status' => 'active',
            'must_change_password' => true,
            'date_created' => now(),
        ]);

        return view('employees.credentials', [
            'user' => $user,
            'tempPassword' => $tempPassword,
        ]);
    }
}
