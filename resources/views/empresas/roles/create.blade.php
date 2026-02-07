<x-app-layout>
    <div class="max-w-4xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Create Role</h1>

        <form action="{{ route('roles.store') }}" method="POST" class="bg-white shadow rounded-lg p-6 space-y-6">
            @csrf

            <div>
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" required
                       class="w-full mt-1 border-gray-300 rounded-lg">
            </div>

            <div>
                <label class="block text-gray-700">Description</label>
                <textarea name="description"
                          class="w-full mt-1 border-gray-300 rounded-lg"></textarea>
            </div>

            <div>
                <label class="block text-gray-700">Access Level</label>
                <input type="number" name="access_level" min="1" value="1"
                       class="w-full mt-1 border-gray-300 rounded-lg">
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('roles.index') }}"
                   class="px-4 py-2 bg-gray-200 rounded-lg">Cancel</a>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
