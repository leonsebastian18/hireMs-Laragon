<x-app-layout>
    <div class="max-w-4xl mx-auto px-6 py-8">
    <h1 class="text-3xl font-semibold mb-6">Edit Candidate</h1>

    <form action="{{ route('candidates.update', $candidate) }}" method="POST" class="space-y-4 bg-white shadow p-6 rounded-lg">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">First Name</label>
                <input type="text" name="nombre" value="{{ $candidate->nombre }}" class="w-full border-gray-300 rounded-lg" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Last Name</label>
                <input type="text" name="apellido" value="{{ $candidate->apellido }}" class="w-full border-gray-300 rounded-lg" required>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input type="email" name="email" value="{{ $candidate->email }}" class="w-full border-gray-300 rounded-lg" required>
            </div>
            <div>
                <label class="block text-sm font-medium">Phone</label>
                <input type="text" name="telefono" value="{{ $candidate->telefono }}" class="w-full border-gray-300 rounded-lg">
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium">City</label>
            <input type="text" name="ciudad" value="{{ $candidate->ciudad }}" class="w-full border-gray-300 rounded-lg">
        </div>

        <div>
            <label class="block text-sm font-medium">Status</label>
            <select name="estado" class="w-full border-gray-300 rounded-lg">
                <option value="Activo" {{ $candidate->estado === 'Activo' ? 'selected' : '' }}>Active</option>
                <option value="Inactivo" {{ $candidate->estado === 'Inactivo' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <div class="flex justify-end mt-6">
            <a href="{{ route('candidates.index') }}" class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 mr-2">Cancel</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
</x-app-layout>
