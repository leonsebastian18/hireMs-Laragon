<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow mt-10">
        <h2 class="text-xl font-bold mb-4">Edit Document</h2>

        <form action="{{ route('candidates.documents.update', [$candidate->id, $document->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label class="block mb-2 font-medium">Document Type</label>
            <input type="text" name="tipo" value="{{ old('tipo', $document->tipo) }}" class="w-full border rounded p-2 mb-4" required>

            <p class="text-sm text-gray-500 mb-2">
                Current file:
                @if($document->url_archivo)
                    <a href="{{ asset('storage/' . $document->url_archivo) }}" target="_blank" class="text-blue-600 underline">
                        {{ $document->nombre_archivo }}
                    </a>
                @else
                    No file uploaded
                @endif
            </p>

            <label class="block mb-2 font-medium">Replace File</label>
            <input type="file" name="archivo" class="w-full border rounded p-2 mb-4">

            <div class="flex justify-between">
                <a href="{{ route('candidates.show', $candidate->id) }}" class="text-gray-600 hover:underline">← Back</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
