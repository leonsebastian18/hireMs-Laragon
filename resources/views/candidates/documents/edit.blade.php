<x-app-layout>
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow mt-10">
        <h2 class="text-xl font-bold mb-4">Edit document</h2>

        <form action="{{ route('candidates.documents.update', [$candidate->id, $document->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Tipo de documento --}}
            <label class="block mb-2 font-medium">Document type</label>
            <select name="tipo_documento" class="w-full border rounded p-2 mb-4" required>
                <option value="">-- Select a type --</option>
                <option value="CV" {{ old('tipo_documento', $document->tipo_documento) == 'CV' ? 'selected' : '' }}>CV</option>
                <option value="Carta_Presentacion" {{ old('tipo_documento', $document->tipo_documento) == 'Carta_Presentacion' ? 'selected' : '' }}>Cover letter</option>
                <option value="Certificado" {{ old('tipo_documento', $document->tipo_documento) == 'Certificado' ? 'selected' : '' }}>Certificate</option>
                <option value="Portfolio" {{ old('tipo_documento', $document->tipo_documento) == 'Portfolio' ? 'selected' : '' }}>Portfolio</option>
                <option value="Otro" {{ old('tipo_documento', $document->tipo_documento) == 'Otro' ? 'selected' : '' }}>Other</option>
            </select>

            {{-- Nombre del archivo --}}
            <label class="block mb-2 font-medium">File name</label>
            <input
                type="text"
                name="nombre_archivo"
                value="{{ old('nombre_archivo', $document->nombre_archivo) }}"
                class="w-full border rounded p-2 mb-4"
                required
            >

            {{-- Archivo actual --}}
            <p class="text-sm text-gray-500 mb-2">
               Current file:
                @if($document->url_archivo)
                    <a href="{{ asset('storage/' . $document->url_archivo) }}" target="_blank" class="text-blue-600 underline">
                        {{ $document->nombre_archivo }}
                    </a>
                @else
                    <span class="text-gray-500">No file uploaded</span>
                @endif
            </p>

            {{-- Reemplazar archivo --}}
            <label class="block mb-2 font-medium">Replace file (optional)</label>
            <input type="file" name="archivo" class="w-full border rounded p-2 mb-4">

            <div class="flex justify-between items-center">
                <a href="{{ route('candidates.show', $candidate->id) }}" class="text-gray-600 hover:underline">← Return</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>
