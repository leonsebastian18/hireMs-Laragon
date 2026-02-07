<x-app-layout>
    <div class="max-w-4xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Create Department</h1>

        <form action="{{ route('departments.store') }}" method="POST"
              class="bg-white shadow rounded-lg p-6 space-y-6">
            @csrf

            <div>
                <label class="block text-gray-700">Company</label>
                <select name="id_empresa" required
                        class="w-full mt-1 border-gray-300 rounded-lg">
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}">
                            {{ $company->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block text-gray-700">Name</label>
                <input type="text" name="nombre" required
                       class="w-full mt-1 border-gray-300 rounded-lg">
            </div>

            <div>
                <label class="block text-gray-700">Description</label>
                <textarea name="descripcion"
                          class="w-full mt-1 border-gray-300 rounded-lg"></textarea>
            </div>

            <div>
                <label class="block text-gray-700">Annual Budget</label>
                <input type="number" step="0.01" name="presupuesto_anual"
                       class="w-full mt-1 border-gray-300 rounded-lg">
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('departments.index') }}"
                   class="px-4 py-2 bg-gray-200 rounded-lg">Cancel</a>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
