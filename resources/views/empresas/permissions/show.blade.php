<x-app-layout>
    <div class="max-w-4xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Permission Details</h1>

        <div class="bg-white shadow rounded-lg p-6 space-y-4">
            <p><strong>Name:</strong> {{ $permission->name }}</p>
            <p><strong>Description:</strong> {{ $permission->description ?? '-' }}</p>
            <p><strong>Module:</strong> {{ $permission->module }}</p>

            <a href="{{ route('permissions.index') }}"
               class="inline-block mt-4 px-4 py-2 bg-gray-200 rounded-lg">
                Back
            </a>
        </div>
    </div>
</x-app-layout>
