<x-app-layout>
    <div class="max-w-xl mx-auto p-6">
        <h2 class="text-lg font-semibold mb-4 text-green-700">Account Created Successfully</h2>

        <p class="mb-2">Ibigay ang credentials na ito sa employee:</p>

        <div class="bg-gray-100 p-4 rounded mb-4">
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Temporary Password:</strong> {{ $tempPassword }}</p>
        </div>

        <p class="text-sm text-gray-500">
            Note: Ipapakita lang ito ngayon — hindi na ito makikita ulit. Required baguhin
            ng employee ang password na ito sa unang login.
        </p>

        <a href="{{ route('employees.index') }}" class="inline-block mt-4 text-blue-600 underline">
            Back to Employee List
        </a>
    </div>
</x-app-layout>
