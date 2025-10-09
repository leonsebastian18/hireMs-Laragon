<x-app-layout>
<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-5">Register new candidate</h1>

    <form action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 font-medium">First name</label>
                <input type="text" name="first_name" class="w-full border rounded-lg p-2" required>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Last name</label>
                <input type="text" name="last_name" class="w-full border rounded-lg p-2" required>
            </div>
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Email</label>
            <input type="email" name="email" class="w-full border rounded-lg p-2" required>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 font-medium">Phone</label>
                <input type="text" name="phone" class="w-full border rounded-lg p-2">
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Address</label>
                <input type="text" name="address" class="w-full border rounded-lg p-2">
            </div>
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Position you are applying for</label>
            <input type="text" name="position" class="w-full border rounded-lg p-2">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Upload CV (PDF)</label>
            <input type="file" name="cv" accept="application/pdf" class="w-full border rounded-lg p-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
           Save Candidate
        </button>
    </form>
</div>
</x-app-layout>
