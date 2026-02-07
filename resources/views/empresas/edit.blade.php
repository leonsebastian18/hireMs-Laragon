<x-app-layout>
    <div class="max-w-4xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Edit Company</h1>

        <form action="{{ route('empresas.update', $company) }}" method="POST"
              class="bg-white shadow rounded-lg p-6 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-700">Name</label>
                <input type="text" name="nombre" value="{{ $company->nombre }}" required
                       class="w-full mt-1 border-gray-300 rounded-lg">
            </div>

            <div>
                <label class="block text-gray-700">Description</label>
                <textarea name="descripcion"
                          class="w-full mt-1 border-gray-300 rounded-lg">{{ $company->descripcion }}</textarea>
            </div>

            <div>
                <label class="block text-gray-700">Status</label>
                <select name="estado" class="w-full mt-1 border-gray-300 rounded-lg">
                    <option value="Activa" @selected($company->estado === 'Activa')>Active</option>
                    <option value="Inactiva" @selected($company->estado === 'Inactiva')>Inactive</option>
                </select>
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('empresas.index') }}"
                   class="px-4 py-2 bg-gray-200 rounded-lg">Cancel</a>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
