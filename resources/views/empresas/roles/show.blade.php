<x-app-layout>
    <div class="max-w-4xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Role Details</h1>

        <div class="bg-white shadow rounded-lg p-6 space-y-4">
            <p><strong>Name:</strong> {{ $role->name }}</p>
            <p><strong>Description:</strong> {{ $role->description ?? '-' }}</p>
            <p><strong>Access Level:</strong> {{ $role->access_level }}</p>

            <a href="{{ route('roles.index') }}"
               class="inline-block mt-4 px-4 py-2 bg-gray-200 rounded-lg">
                Back
            </a>
        </div>
    </div>
</x-app-layout>
