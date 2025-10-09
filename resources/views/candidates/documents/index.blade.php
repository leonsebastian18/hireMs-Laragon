<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow mt-10">
        <h2 class="text-2xl font-semibold mb-4">Documents</h2>

        <a href="{{ route('candidates.documents.create', $candidate) }}" class="text-blue-600 hover:underline mb-4 inline-block">
            ➕ Add new document
        </a>

        <table class="w-full border border-gray-200 mt-4">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-4 py-2 border">Type</th>
                    <th class="px-4 py-2 border">File</th>
                    <th class="px-4 py-2 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($documents as $document)
                <tr>
                    <td class="px-4 py-2 border">{{ $document->tipo }}</td>
                    <td class="px-4 py-2 border">
                        <a href="{{ asset('storage/' . $document->ruta) }}" class="text-blue-500 hover:underline" target="_blank">View</a>
                    </td>
                    <td class="px-4 py-2 border">
                        <a href="{{ route('candidates.documents.edit', [$candidate, $document]) }}" class="text-green-600 hover:underline">Edit</a>
                        <form action="{{ route('candidates.documents.destroy', [$candidate, $document]) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="3" class="px-4 py-2 text-center">No documents uploaded.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
