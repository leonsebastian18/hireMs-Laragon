<x-app-layout>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg p-6 mt-6">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Add Work Experience</h2>

        <form action="{{ route('candidates.experiences.store', $candidate->id) }}" method="POST">
            @csrf
            <input type="hidden" name="id_candidato" value="{{ $candidate->id }}">

            <div class="mb-4">
                <label class="block text-gray-700">Company</label>
                <input type="text" name="empresa" value="{{ old('empresa') }}" required
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Job title</label>
                <input type="text" name="cargo" value="{{ old('cargo') }}" required
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="descripcion" rows="3" class="w-full border rounded p-2">{{ old('descripcion') }}</textarea>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700">Start date</label>
                    <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio') }}" required
                           class="w-full border rounded p-2">
                </div>
                <div>
                    <label class="block text-gray-700">Completion date</label>
                    <input type="date" name="fecha_fin" value="{{ old('fecha_fin') }}"
                           class="w-full border rounded p-2">
                </div>
            </div>

            {{-- ✅ Campo oculto + checkbox para asegurar envío de valor booleano --}}
            <div class="mb-4 flex items-center">
                <input type="hidden" name="actualmente_trabaja" value="0">
                <input type="checkbox" name="actualmente_trabaja" id="actualmente_trabaja" value="1"
                       {{ old('actualmente_trabaja') ? 'checked' : '' }}
                       class="mr-2">
                <label for="actualmente_trabaja" class="text-gray-700">I currently work here</label>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Salary (optional)</label>
                <input type="number" name="salario" step="0.01" min="0" value="{{ old('salario') }}"
                       class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Achievements</label>
                <textarea name="logros" rows="3" class="w-full border rounded p-2">{{ old('logros') }}</textarea>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700">References</label>
                <textarea name="referencias" rows="3" class="w-full border rounded p-2">{{ old('referencias') }}</textarea>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('candidates.show', $candidate->id) }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                   ← Return
                </a>
                <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
