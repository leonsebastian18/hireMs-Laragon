<x-app-layout>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-8 mt-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">
            Add Education for {{ $candidate->nombre }}
        </h2>

        <form action="{{ route('candidates.education.store', $candidate->id) }}" method="POST" class="space-y-6">
            @csrf
            @include('candidates.education.form')

            <div class="pt-4">
                <button type="submit"
                    class="w-full sm:w-auto px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
