<x-app-layout>
    <div class="max-w-3xl mx-auto mt-10 bg-white shadow rounded-lg p-6">
    <h1 class="text-2xl font-semibold mb-4">Edit Competency</h1>

    <form action="{{ route('candidates.competencias.update', [$candidate->id, $competencia->id]) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium mb-1">Competency</label>
            <input type="text" disabled value="{{ $competencia->nombre }}" class="w-full border-gray-200 rounded-lg p-2 bg-gray-50">
            <p class="text-gray-500 text-sm mt-1">Category: {{ $competencia->categoria }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Level</label>
                <input type="text" name="nivel_actual" value="{{ old('nivel_actual', $competencia->pivot->nivel_actual ?? '') }}"
                       class="w-full border-gray-300 rounded-lg p-2" required>
                @error('nivel_actual') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Years of experience</label>
                <input type="number" name="años_experiencia" value="{{ old('años_experiencia', $competencia->pivot->años_experiencia ?? 0) }}"
                       min="0" class="w-full border-gray-300 rounded-lg p-2" required>
                @error('años_experiencia') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Certification</label>
                <input type="text" name="certificacion" value="{{ old('certificacion', $competencia->pivot->certificacion ?? '') }}"
                       class="w-full border-gray-300 rounded-lg p-2">
                @error('certificacion') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Last updated</label>
            <input type="date" name="fecha_ultima_actualizacion" value="{{ old('fecha_ultima_actualizacion', optional($competencia->pivot->fecha_ultima_actualizacion)->format('Y-m-d') ?? '') }}"
                   class="w-full border-gray-300 rounded-lg p-2">
            @error('fecha_ultima_actualizacion') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center gap-3 mt-4">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Update Competency
            </button>

            <a href="{{ route('candidates.competencias.index', $candidate->id) }}"
               class="text-gray-600 hover:underline">Back</a>
        </div>
    </form>
</div>
</x-app-layout>
