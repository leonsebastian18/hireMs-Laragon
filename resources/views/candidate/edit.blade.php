<x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl p-8 mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Candidato</h2>

        <form action="{{ route('candidates.update', $candidate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nombre -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nombre</label>
                    <input type="text" name="first_name" value="{{ old('first_name', $candidate->first_name) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required>
                </div>

                <!-- Apellido -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Apellido</label>
                    <input type="text" name="last_name" value="{{ old('last_name', $candidate->last_name) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required>
                </div>

                <!-- Posición -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Posición</label>
                    <input type="text" name="position" value="{{ old('position', $candidate->position) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                </div>

                <!-- Correo electrónico -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Correo electrónico</label>
                    <input type="email" name="email" value="{{ old('email', $candidate->email) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required>
                </div>

                <!-- Teléfono -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Teléfono</label>
                    <input type="text" name="phone" value="{{ old('phone', $candidate->phone) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required>
                </div>

                <!-- Dirección -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Dirección</label>
                    <input type="text" name="address" value="{{ old('address', $candidate->address) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                </div>
            </div>

            <!-- CV -->
            <div class="mt-6">
                <label class="block text-gray-700 font-semibold mb-2">CV actual</label>
                @if ($candidate->cv)
                    <a href="{{ asset('storage/' . $candidate->cv) }}" target="_blank"
                       class="text-indigo-600 hover:underline">Ver CV</a>
                @else
                    <p class="text-gray-500 italic">No adjunto</p>
                @endif
            </div>

            <div class="mt-4">
                <label class="block text-gray-700 font-semibold mb-2">Actualizar CV (PDF)</label>
                <input type="file" name="cv" accept="application/pdf"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500">
            </div>

            <!-- Botones -->
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('candidates.index') }}"
                    class="px-5 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Volver</a>
                <button type="submit"
                    class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Actualizar</button>
            </div>
        </form>
    </div>
</x-app-layout><x-app-layout>
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl p-8 mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Candidato</h2>

        <form action="{{ route('candidates.update', $candidate->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nombre -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nombre</label>
                    <input type="text" name="first_name" value="{{ old('first_name', $candidate->first_name) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required>
                </div>

                <!-- Apellido -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Apellido</label>
                    <input type="text" name="last_name" value="{{ old('last_name', $candidate->last_name) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required>
                </div>

                <!-- Posición -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Posición</label>
                    <input type="text" name="position" value="{{ old('position', $candidate->position) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                </div>

                <!-- Correo electrónico -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Correo electrónico</label>
                    <input type="email" name="email" value="{{ old('email', $candidate->email) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required>
                </div>

                <!-- Teléfono -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Teléfono</label>
                    <input type="text" name="phone" value="{{ old('phone', $candidate->phone) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500" required>
                </div>

                <!-- Dirección -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Dirección</label>
                    <input type="text" name="address" value="{{ old('address', $candidate->address) }}"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500">
                </div>
            </div>

            <!-- CV -->
            <div class="mt-6">
                <label class="block text-gray-700 font-semibold mb-2">CV actual</label>
                @if ($candidate->cv)
                    <a href="{{ asset('storage/' . $candidate->cv) }}" target="_blank"
                       class="text-indigo-600 hover:underline">Ver CV</a>
                @else
                    <p class="text-gray-500 italic">No adjunto</p>
                @endif
            </div>

            <div class="mt-4">
                <label class="block text-gray-700 font-semibold mb-2">Actualizar CV (PDF)</label>
                <input type="file" name="cv" accept="application/pdf"
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-indigo-200 focus:border-indigo-500">
            </div>

            <!-- Botones -->
            <div class="mt-8 flex justify-end space-x-4">
                <a href="{{ route('candidates.index') }}"
                    class="px-5 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Volver</a>
                <button type="submit"
                    class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Actualizar</button>
            </div>
        </form>
    </div>
</x-app-layout>
