<x-app-layout>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-8 mt-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">
            Edit Education for {{ $candidate->nombre }}
        </h2>

        <form action="{{ route('candidates.education.update', [$candidate->id, $education->id]) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Incluye el formulario reutilizable --}}
            @include('candidates.education.form')

            <div class="pt-4 flex justify-end space-x-4">
                <a href="{{ route('candidates.show', $candidate->id) }}"
                    class="px-6 py-2 bg-gray-200 text-gray-800 font-semibold rounded-lg shadow-md hover:bg-gray-300 transition">
                    Cancel
                </a>

                <button type="submit"
                    class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>

