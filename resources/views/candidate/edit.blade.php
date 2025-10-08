<x-app-layout>
<div class="max-w-lg mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Editar Candidato</h1>

    <form method="POST" action="{{ route('candidate.update', $candidate) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold">Teléfono</label>
            <input type="text" name="phone" class="w-full border-gray-300 rounded p-2" value="{{ old('phone', $candidate->phone) }}">
        </div>

        <div>
            <label class="block font-semibold">Dirección</label>
            <input type="text" name="address" class="w-full border-gray-300 rounded p-2" value="{{ old('address', $candidate->address) }}">
        </div>

        <div>
            <label class="block font-semibold">CV</label>
            <input type="text" name="cv" class="w-full border-gray-300 rounded p-2" value="{{ old('cv', $candidate->cv) }}">
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
            Actualizar
        </button>
    </form>
</div>
</x-app-layout>
