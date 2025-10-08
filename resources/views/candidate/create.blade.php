<x-app-layout>
<div class="max-w-3xl mx-auto mt-10 bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-5">Registrar nuevo candidato</h1>

    <form action="{{ route('candidate.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 font-medium">Nombre</label>
                <input type="text" name="first_name" class="w-full border rounded-lg p-2" required>
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Apellido</label>
                <input type="text" name="last_name" class="w-full border rounded-lg p-2" required>
            </div>
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Correo Electrónico</label>
            <input type="email" name="email" class="w-full border rounded-lg p-2" required>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700 font-medium">Teléfono</label>
                <input type="text" name="phone" class="w-full border rounded-lg p-2">
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Dirección</label>
                <input type="text" name="address" class="w-full border rounded-lg p-2">
            </div>
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Posición a la que se postula</label>
            <input type="text" name="position" class="w-full border rounded-lg p-2">
        </div>

        <div>
            <label class="block text-gray-700 font-medium">Subir CV (PDF)</label>
            <input type="file" name="cv" accept="application/pdf" class="w-full border rounded-lg p-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Guardar Candidato
        </button>
    </form>
</div>
</x-app-layout>
