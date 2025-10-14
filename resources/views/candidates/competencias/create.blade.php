<x-app-layout>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-8 mt-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">
            Agregar Competencia a {{ $candidate->nombre }}
        </h2>

        <form action="{{ route('candidates.competencias.store', $candidate->id) }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Descripción</label>
                <textarea name="descripcion" class="w-full border rounded p-2">{{ old('descripcion') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Categoría</label>
                <select name="categoria" class="w-full border rounded p-2" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria }}">{{ $categoria }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700">Nivel máximo</label>
                    <input type="number" name="nivel_maximo" min="1" max="10" class="w-full border rounded p-2">
                </div>
                <div>
                    <label class="block text-gray-700">Nivel actual</label>
                    <input type="number" name="nivel_actual" min="0" max="10" class="w-full border rounded p-2">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700">Años de experiencia</label>
                    <input type="number" name="años_experiencia" min="0" class="w-full border rounded p-2">
                </div>
                <div>
                    <label class="block text-gray-700">Certificación</label>
                    <input type="text" name="certificacion" class="w-full border rounded p-2">
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('candidates.show', $candidate->id) }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">← Volver</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Guardar</button>
            </div>
        </form>
    </div>
</x-app-layout>
