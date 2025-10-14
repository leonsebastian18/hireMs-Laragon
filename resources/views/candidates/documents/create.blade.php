<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow mt-10">
        <h2 class="text-xl font-bold mb-4">Upload document for {{ $candidate->nombre }}</h2>

        <form action="{{ route('candidates.documents.store', $candidate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Tipo de documento --}}
            <label class="block mb-2 font-medium">Document type</label>
            <select name="tipo_documento" class="w-full border rounded p-2 mb-4" required>
                <option value="">-- Select a type --</option>
                <option value="CV">CV</option>
                <option value="Carta_Presentacion">Cover letter</option>
                <option value="Certificado">Certificate</option>
                <option value="Portfolio">Portfolio</option>
                <option value="Otro">Other</option>
            </select>

            {{-- Nombre del archivo --}}
            <label class="block mb-2 font-medium">File name</label>
            <input type="text" name="nombre_archivo" class="w-full border rounded p-2 mb-4" placeholder="Example: Updated CV 2025" required>

            {{-- Archivo --}}
            <label class="block mb-2 font-medium">File (PDF, DOC, DOCX)</label>
            <input type="file" name="archivo" class="w-full border rounded p-2 mb-4" required>

            <div class="flex justify-between items-center">
                <a href="{{ route('candidates.show', $candidate->id) }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">← Return</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
