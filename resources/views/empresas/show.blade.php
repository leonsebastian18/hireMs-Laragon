<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">
            Company Details
        </h1>

        {{-- Navigation --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
            <a href="{{ route('departments.index', ['empresa' => $company->id]) }}"
               class="p-4 bg-blue-50 rounded-lg hover:bg-blue-100 text-center">
                <h3 class="text-lg font-semibold text-blue-700">Departments</h3>
                <p class="text-sm text-gray-600">Manage company departments</p>
            </a>

            <a href="{{ route('roles.index') }}"
               class="p-4 bg-green-50 rounded-lg hover:bg-green-100 text-center">
                <h3 class="text-lg font-semibold text-green-700">Roles</h3>
                <p class="text-sm text-gray-600">Access roles</p>
            </a>

            <a href="{{ route('permissions.index') }}"
               class="p-4 bg-purple-50 rounded-lg hover:bg-purple-100 text-center">
                <h3 class="text-lg font-semibold text-purple-700">Permissions</h3>
                <p class="text-sm text-gray-600">System permissions</p>
            </a>

            <a href="{{ route('system-users.index') }}"
               class="p-4 bg-orange-50 rounded-lg hover:bg-orange-100 text-center">
                <h3 class="text-lg font-semibold text-orange-700">System users</h3>
                <p class="text-sm text-gray-600">Company users</p>
            </a>
        </div>

        {{-- Company Info --}}
        <div class="bg-white shadow rounded-lg p-6 space-y-3">
            <p><strong>Name:</strong> {{ $company->nombre }}</p>
            <p><strong>Sector:</strong> {{ $company->sector ?? '-' }}</p>
            <p><strong>Size:</strong> {{ $company->tamano ?? '-' }}</p>
            <p><strong>Email:</strong> {{ $company->email ?? '-' }}</p>
            <p><strong>Status:</strong> {{ $company->estado }}</p>
        </div>

        <a href="{{ route('empresas.index') }}"
           class="inline-block mt-6 px-4 py-2 bg-gray-200 rounded-lg">
            Back to Companies
        </a>
    </div>
</x-app-layout>
