<?php

namespace App\Http\Controllers;

use App\Helpers\ActivityLogger;
use App\Models\ActivityLog;
use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = User::with('branch')
            ->whereIn('role', ['cashier', 'checker'])
            ->orderBy('user_id', 'desc')
            ->get();

        return view('owner.employees.index', compact('employees'));
    }

    public function create()
    {
        $branches = Branch::where('status', 'active')->get();
        return view('owner.employees.create', compact('branches'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'unique:users,email'],
            'role' => ['required', 'in:cashier,checker'],
            'branch_id' => ['required', 'integer', 'exists:branches,branch_id'],
        ]);

        // System-generated temporary password (Fig. 9 -> Fig. 10)
        $tempPassword = 'RPL-' . Str::upper(Str::random(4)) . rand(100, 999);

        $employee = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $tempPassword, // naka-'hashed' cast sa User model
            'role' => $validated['role'],
            'branch_id' => $validated['branch_id'],
            'status' => 'active',
            'must_change_password' => true,
        ]);

        $branch = Branch::find($validated['branch_id']);
        ActivityLogger::log("Created {$employee->role} account for {$employee->name}", 'Employee Management');

        return redirect()->route('owner.employees.credentials')->with('generated_credentials', [
            'name' => $employee->name,
            'email' => $employee->email,
            'role' => ucfirst($employee->role),
            'branch' => $branch?->branch_name ?? 'Assigned Branch',
            'temp_password' => $tempPassword,
        ]);
    }

    public function credentials()
    {
        $credentials = session('generated_credentials');
        if (! $credentials) {
            return redirect()->route('owner.employees.index');
        }

        return view('owner.employees.credentials', compact('credentials'));
    }

    public function toggleStatus(User $user)
    {
        $newStatus = strtolower((string) $user->status) === 'active' ? 'inactive' : 'active';
        $user->status = $newStatus;
        $user->save();

        ActivityLogger::log("Set employee {$user->name} status to {$newStatus}", 'Employee Management');

        return back()->with('success', "Employee status updated to {$newStatus}.");
    }

    public function activityLogs(Request $request)
    {
        $logs = ActivityLog::with(['user', 'branch'])
            ->when($request->branch_id, fn ($q, $b) => $q->where('branch_id', $b))
            ->orderByDesc('log_id')
            ->paginate(25);

        $branches = Branch::all();

        return view('owner.activity-logs.index', compact('logs', 'branches'));
    }
}
