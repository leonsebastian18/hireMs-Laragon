<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold text-gray-800">Permissions</h1>
            <a href="{{ route('permissions.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
               + Add Permission
            </a>
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="w-full border-collapse">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-2 text-left">#</th>
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Description</th>
                        <th class="px-4 py-2 text-left">Module</th>
                        <th class="px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($permissions as $permission)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="px-4 py-2 font-medium">{{ $permission->name }}</td>
                            <td class="px-4 py-2">{{ $permission->description ?? '-' }}</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 rounded text-sm bg-purple-100 text-purple-700">
                                    {{ $permission->module }}
                                </span>
                            </td>
                            <td class="px-4 py-2 flex justify-center gap-3">
                                <a href="{{ route('permissions.show', $permission) }}"
                                   class="text-blue-600 hover:underline">View</a>

                                <a href="{{ route('permissions.edit', $permission) }}"
                                   class="text-yellow-600 hover:underline">Edit</a>

                                <form action="{{ route('permissions.destroy', $permission) }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this permission?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-600 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                                No permissions found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
