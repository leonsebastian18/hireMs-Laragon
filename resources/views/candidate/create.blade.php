<x-app-layout>
<div class="max-w-lg mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Crear Candidato</h1>

    <form method="POST" action="{{ route('candidate.store') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block font-semibold">Teléfono</label>
            <input type="text" name="phone" class="w-full border-gray-300 rounded p-2" value="{{ old('phone') }}">
        </div>

        <div>
            <label class="block font-semibold">Dirección</label>
            <input type="text" name="address" class="w-full border-gray-300 rounded p-2" value="{{ old('address') }}">
        </div>

        <div>
            <label class="block font-semibold">CV (URL o archivo)</label>
            <input type="text" name="cv" class="w-full border-gray-300 rounded p-2" value="{{ old('cv') }}">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Guardar
        </button>
    </form>
</div>
</x-app-layout>
