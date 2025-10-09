<x-app-layout>
   <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow mt-10">
    <h2 class="text-2xl font-semibold mb-4">Edit Document</h2>

    <form action="{{ route('candidates.documents.update', [$candidate, $document]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-medium">Document Type</label>
            <input type="text" name="type" class="w-full border-gray-300 rounded-lg"
                   value="{{ old('type', $document->tipo) }}" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Update
        </button>
        </form>
    </div>
  </x-app-layout>
