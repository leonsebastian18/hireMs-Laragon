<x-app-layout>
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Lista de Candidatos</h1>

        <a href="{{ route('candidate.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Nuevo Candidato
       </a>

        <table class="w-full mt-6 border border-gray-200 rounded-lg shadow-sm">
            <thead>
    <tr class="bg-gray-100 text-left">
        <th class="py-2 px-4 border-b">Nombre</th>
        <th class="py-2 px-4 border-b">Apellido</th>
        <th class="py-2 px-4 border-b">Correo</th>
        <th class="py-2 px-4 border-b">Teléfono</th>
        <th class="py-2 px-4 border-b">Posición</th>
        <th class="py-2 px-4 border-b">CV</th>
        <th class="py-2 px-4 border-b">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ($candidates as $candidate)
        <tr>
            <td class="py-2 px-4 border-b">{{ $candidate->first_name }}</td>
            <td class="py-2 px-4 border-b">{{ $candidate->last_name }}</td>
            <td class="py-2 px-4 border-b">{{ $candidate->email }}</td>
            <td class="py-2 px-4 border-b">{{ $candidate->phone }}</td>
            <td class="py-2 px-4 border-b">{{ $candidate->position }}</td>
            <td class="py-2 px-4 border-b">
                @if($candidate->cv)
                    <a href="{{ asset('storage/' . $candidate->cv) }}" class="text-blue-600 hover:underline" target="_blank">Ver CV</a>
                @else
                    <span class="text-gray-500">Sin archivo</span>
                @endif
            </td>
            <td class="py-2 px-4 border-b">
                <a href="{{ route('candidate.edit', $candidate) }}" class="text-blue-600 hover:underline">Editar</a>
                <form action="{{ route('candidate.destroy', $candidate) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600 hover:underline ml-2">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
        </table>
    </div>
</x-app-layout>
