<x-app-layout>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-8 mt-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">
            Edit Competition of {{ $candidate->nombre }}
        </h2>

        <form action="{{ route('candidates.competencias.update', [$candidate->id, $competencia->id]) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Nombre --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Skill name</label>
                <input type="text" name="nombre"
                    value="{{ old('nombre', $competencia->nombre) }}"
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-200" required>
            </div>

            {{-- Descripción --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Description</label>
                <textarea name="descripcion"
                    class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-200">{{ old('descripcion', $competencia->descripcion) }}</textarea>
            </div>

            {{-- Categoría --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-medium">Category</label>
                <select name="categoria" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-200" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria }}" {{ old('categoria', $competencia->categoria) == $categoria ? 'selected' : '' }}>
                            {{ $categoria }}
                        </option>
                    @endforeach
                </select>
            </div>

            {{-- Nivel máximo y actual --}}
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-medium">Maximum level</label>
                    <input type="number" name="nivel_maximo" min="1" max="10"
                        value="{{ old('nivel_maximo', $competencia->nivel_maximo) }}"
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Current level</label>
                    <input type="number" name="nivel_actual" min="0" max="10"
                        value="{{ old('nivel_actual', $relacion->nivel_actual ?? 0) }}"
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>

            {{-- Años de experiencia y certificación --}}
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700 font-medium">Years of experience</label>
                    <input type="number" name="años_experiencia" min="0"
                        value="{{ old('años_experiencia', $relacion->años_experiencia ?? 0) }}"
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                <div>
                    <label class="block text-gray-700 font-medium">Certification</label>
                    <input type="text" name="certificacion"
                        value="{{ old('certificacion', $relacion->certificacion ?? '') }}"
                        class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>
            </div>

            {{-- Botones --}}
            <div class="flex justify-between mt-6">
                <a href="{{ route('candidates.show', $candidate->id) }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
                    ← Return
                </a>

                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    Update
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
