<x-app-layout>
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Lista de Candidatos</h1>

        <a href="{{ route('candidate.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Nuevo Candidato
        </a>

        <table class="w-full mt-6 border border-gray-200 rounded-lg shadow-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 text-left">ID</th>
                    <th class="py-2 px-4 text-left">Teléfono</th>
                    <th class="py-2 px-4 text-left">Dirección</th>
                    <th class="py-2 px-4 text-left">CV</th>
                    <th class="py-2 px-4 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidates as $candidate)
                    <tr class="border-t">
                        <td class="py-2 px-4">{{ $candidate->id }}</td>
                        <td class="py-2 px-4">{{ $candidate->phone }}</td>
                        <td class="py-2 px-4">{{ $candidate->address }}</td>
                        <td class="py-2 px-4">{{ $candidate->cv }}</td>
                        <td class="py-2 px-4 flex gap-2">
                            <a href="{{ route('candidate.show', $candidate) }}" class="text-blue-500 hover:underline">Ver</a>
                            <a href="{{ route('candidate.edit', $candidate) }}" class="text-yellow-500 hover:underline">Editar</a>
                            <form action="{{ route('candidate.destroy', $candidate) }}" method="POST" onsubmit="return confirm('¿Eliminar este candidato?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
