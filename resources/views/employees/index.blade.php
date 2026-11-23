<x-app-layout>
    <div class="max-w-3xl mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Employee Accounts</h2>
            <a href="{{ route('employees.create') }}" class="bg-green-600 text-white px-3 py-2 rounded">
                + Add Employee
            </a>
        </div>

        <table class="w-full border">
            <thead class="bg-gray-100">
            <tr>
                <th class="p-2 text-left">Name</th>
                <th class="p-2 text-left">Email</th>
                <th class="p-2 text-left">Role</th>
                <th class="p-2 text-left">Branch</th>
                <th class="p-2 text-left">Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr class="border-t">
                    <td class="p-2">{{ $employee->name }}</td>
                    <td class="p-2">{{ $employee->email }}</td>
                    <td class="p-2">{{ $employee->role }}</td>
                    <td class="p-2">{{ $employee->branch->branch_name ?? 'â€”' }}</td>
                    <td class="p-2">{{ $employee->status }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
