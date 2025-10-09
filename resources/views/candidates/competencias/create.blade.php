<x-app-layout>
    <div class="max-w-3xl mx-auto mt-10 bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-semibold mb-4">Add Competency</h1>

    <form action="{{ route('candidates.competencias.store', $candidate->id) }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium mb-1">Competency</label>
            <select name="id_competencia" required class="w-full border-gray-300 rounded-lg p-2">
                <option value="">Select a competency...</option>
                @foreach($todasCompetencias as $comp)
                    <option value="{{ $comp->id }}" {{ old('id_competencia') == $comp->id ? 'selected' : '' }}>
                        {{ $comp->nombre }} ({{ $comp->categoria }})
                    </option>
                @endforeach
            </select>
            @error('id_competencia') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Level</label>
                <input type="text" name="nivel_actual" value="{{ old('nivel_actual') }}"
                       class="w-full border-gray-300 rounded-lg p-2" required>
                @error('nivel_actual') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Years of experience</label>
                <input type="number" name="años_experiencia" value="{{ old('años_experiencia', 0) }}"
                       min="0" class="w-full border-gray-300 rounded-lg p-2" required>
                @error('años_experiencia') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Certification (optional)</label>
                <input type="text" name="certificacion" value="{{ old('certificacion') }}"
                       class="w-full border-gray-300 rounded-lg p-2">
                @error('certificacion') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Last updated</label>
            <input type="date" name="fecha_ultima_actualizacion" value="{{ old('fecha_ultima_actualizacion') }}"
                   class="w-full border-gray-300 rounded-lg p-2">
            @error('fecha_ultima_actualizacion') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center gap-3 mt-4">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Add Competency
            </button>

            <a href="{{ route('candidates.competencias.index', $candidate->id) }}"
               class="text-gray-600 hover:underline">Cancel</a>
        </div>
    </form>
</div>
</x-app-layout>
