<x-app-layout>
    <div class="max-w-4xl mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Create Company</h1>

        <form action="{{ route('empresas.store') }}" method="POST"
              class="bg-white shadow rounded-lg p-6 space-y-6">
            @csrf

            <div>
                <label class="block text-gray-700">Name</label>
                <input type="text" name="nombre" required
                       class="w-full mt-1 border-gray-300 rounded-lg">
            </div>

            <div>
                <label class="block text-gray-700">Description</label>
                <textarea name="descripcion"
                          class="w-full mt-1 border-gray-300 rounded-lg"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Sector</label>
                    <input type="text" name="sector"
                           class="w-full mt-1 border-gray-300 rounded-lg">
                </div>

                <div>
                    <label class="block text-gray-700">Size</label>
                    <select name="tamano" class="w-full mt-1 border-gray-300 rounded-lg">
                        <option value="">Select</option>
                        <option>Startup</option>
                        <option>Pequeña</option>
                        <option>Mediana</option>
                        <option>Grande</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-gray-700">Address</label>
                <input type="text" name="direccion"
                       class="w-full mt-1 border-gray-300 rounded-lg">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-gray-700">Phone</label>
                    <input type="text" name="telefono"
                           class="w-full mt-1 border-gray-300 rounded-lg">
                </div>

                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email"
                           class="w-full mt-1 border-gray-300 rounded-lg">
                </div>
            </div>

            <div>
                <label class="block text-gray-700">Website</label>
                <input type="text" name="sitio_web"
                       class="w-full mt-1 border-gray-300 rounded-lg">
            </div>

            <div>
                <label class="block text-gray-700">Status</label>
                <select name="estado" class="w-full mt-1 border-gray-300 rounded-lg">
                    <option value="Activa">Active</option>
                    <option value="Inactiva">Inactive</option>
                </select>
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('empresas.index') }}"
                   class="px-4 py-2 bg-gray-200 rounded-lg">Cancel</a>
                <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                    Save
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
