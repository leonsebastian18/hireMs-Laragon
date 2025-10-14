<x-app-layout>
    <div class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-8 mt-10">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">
            Add skill to {{ $candidate->nombre }}
        </h2>

        <form action="{{ route('candidates.competencias.store', $candidate->id) }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700">Skill name</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" class="w-full border rounded p-2" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Description</label>
                <textarea name="descripcion" class="w-full border rounded p-2">{{ old('descripcion') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Category</label>
                <select name="categoria" class="w-full border rounded p-2" required>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria }}">{{ $categoria }}</option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700">Maximum level</label>
                    <input type="number" name="nivel_maximo" min="1" max="10" class="w-full border rounded p-2">
                </div>
                <div>
                    <label class="block text-gray-700">Current level</label>
                    <input type="number" name="nivel_actual" min="0" max="10" class="w-full border rounded p-2">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-gray-700">Years of experience</label>
                    <input type="number" name="años_experiencia" min="0" class="w-full border rounded p-2">
                </div>
                <div>
                    <label class="block text-gray-700">Certification</label>
                    <input type="text" name="certificacion" class="w-full border rounded p-2">
                </div>
            </div>

            <div class="flex justify-between">
                <a href="{{ route('candidates.show', $candidate->id) }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">← Return</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            </div>
        </form>
    </div>
</x-app-layout>
