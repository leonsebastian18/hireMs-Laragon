<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow mt-10">
    <h2 class="text-2xl font-semibold mb-4">Add Work Experience</h2>

    <form action="{{ route('candidates.experiences.store', $candidate) }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1 font-medium">Company</label>
            <input type="text" name="company" class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Position</label>
            <input type="text" name="position" class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Start Date</label>
            <input type="date" name="start_date" class="w-full border-gray-300 rounded-lg" required>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">End Date</label>
            <input type="date" name="end_date" class="w-full border-gray-300 rounded-lg">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" class="w-full border-gray-300 rounded-lg"></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Save
        </button>
    </form>
</div>
</x-app-layout>
