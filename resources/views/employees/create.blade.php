<x-app-layout>
    <div class="max-w-xl mx-auto p-6">
        <h2 class="text-lg font-semibold mb-4">Add Employee Account</h2>

        <form method="POST" action="{{ route('employees.store') }}">
            @csrf

            <label>Full Name</label>
            <input type="text" name="name" class="w-full border rounded p-2 mb-3" required>

            <label>Email</label>
            <input type="email" name="email" class="w-full border rounded p-2 mb-3" required>

            <label>Role</label>
            <select name="role" class="w-full border rounded p-2 mb-3" required>
                <option value="Cashier">Cashier</option>
                <option value="Checker">Checker</option>
            </select>

            <label>Branch</label>
            <select name="branch_id" class="w-full border rounded p-2 mb-3" required>
                @foreach ($branches as $branch)
                    <option value="{{ $branch->branch_id }}">{{ $branch->branch_name }}</option>
                @endforeach
            </select>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
                Create Account
            </button>
        </form>
    </div>
</x-app-layout>
