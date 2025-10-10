<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow mt-10">
        <h2 class="text-xl font-bold mb-4">Upload Document for {{ $candidate->nombre }}</h2>

        <form action="{{ route('candidates.documents.store', $candidate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label class="block mb-2 font-medium">Document Type</label>
            <input type="text" name="tipo" class="w-full border rounded p-2 mb-4" placeholder="Ej: CV o Certificado" required>

            <label class="block mb-2 font-medium">Upload File (PDF, DOC, DOCX)</label>
            <input type="file" name="archivo" class="w-full border rounded p-2 mb-4" required>

            <div class="flex justify-between">
                <a href="{{ route('candidates.show', $candidate->id) }}" class="text-gray-600 hover:underline">← Back</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
