<?php

namespace App\Http\Controllers;

use App\Helpers\ActivityLogger;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::orderBy('branch_id')->get();
        return view('owner.branches.index', compact('branches'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'branch_name' => ['required', 'string', 'max:150', 'unique:branches,branch_name'],
            'location' => ['required', 'string', 'max:255'],
            'contact_number' => ['nullable', 'string', 'max:50'],
            'status' => ['required', 'in:active,inactive'],
        ]);

        $branch = Branch::create([
            ...$validated,
            'date_registered' => now(),
        ]);

        ActivityLogger::log("Added new branch: {$branch->branch_name}", 'Branch Management');

        return back()->with('success', 'Branch created successfully.');
    }

    public function update(Request $request, Branch $branch)
    {
        $validated = $request->validate([
            'branch_name' => ['required', 'string', 'max:150', 'unique:branches,branch_name,' . $branch->branch_id . ',branch_id'],
            'location' => ['required', 'string', 'max:255'],
            'contact_number' => ['nullable', 'string', 'max:50'],
            'status' => ['required', 'in:active,inactive'],
        ]);

        $branch->update($validated);
        ActivityLogger::log("Updated branch: {$branch->branch_name}", 'Branch Management');

        return back()->with('success', 'Branch updated successfully.');
    }
}
