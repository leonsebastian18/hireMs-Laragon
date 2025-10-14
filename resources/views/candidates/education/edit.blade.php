<x-app-layout>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-8 mt-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">
            Editar Educación de {{ $candidate->nombre }}
        </h2>

        <form action="{{ route('candidates.education.update', [$candidate->id, $education->id]) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Formulario reutilizable --}}
            @include('candidates.education.form')

            <div class="flex justify-between pt-6">
                <a href="{{ route('candidates.show', $candidate->id) }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
                   ← Volver
                </a>

                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 transition">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
