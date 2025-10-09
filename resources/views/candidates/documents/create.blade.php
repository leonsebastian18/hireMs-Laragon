  <x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow mt-10">
        <h2 class="text-2xl font-semibold mb-4">Upload Document</h2>

       <form action="{{ route('candidates.documents.store', $candidate) }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="mb-4">
                <label class="block mb-1 font-medium">Document Type</label>
                <input type="text" name="type" class="w-full border-gray-300 rounded-lg" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">File (PDF/DOC/DOCX)</label>
                <input type="file" name="file" class="w-full" required>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Upload
            </button>
        </form>
    </div>
</x-app-layout>
