<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow mt-10">
    <h2 class="text-2xl font-semibold mb-4">Edit Work Experience</h2>

    <form action="{{ route('experiences.update', [$candidate, $experience]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-medium">Company</label>
            <input type="text" name="company" value="{{ $experience->empresa }}" class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Position</label>
            <input type="text" name="position" value="{{ $experience->cargo }}" class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Start Date</label>
            <input type="date" name="start_date" value="{{ $experience->fecha_inicio }}" class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">End Date</label>
            <input type="date" name="end_date" value="{{ $experience->fecha_fin }}" class="w-full border-gray-300 rounded-lg">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" class="w-full border-gray-300 rounded-lg">{{ $experience->descripcion }}</textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Update
        </button>
    </form>
</div>

</x-app-layout>
