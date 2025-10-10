<x-app-layout>
    <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-800">
                    Historial Académico de {{ $candidate->nombre }} {{ $candidate->apellido }}
                </h2>
                <p class="text-gray-500 text-sm mt-1">Registro de formación y estudios</p>
            </div>

            <a href="{{ route('candidates.education.create', $candidate->id) }}"
               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 4v16m8-8H4"/>
                </svg>
                Añadir Educación
            </a>
        </div>

        @if ($educaciones->isEmpty())
            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-md shadow-sm">
                <p class="text-yellow-700 text-sm">
                    No se encontraron registros de educación para este candidato.
                </p>
            </div>
        @else
            <div class="overflow-x-auto rounded-lg shadow-sm border border-gray-200">
                <table class="min-w-full text-sm text-gray-700">
                    <thead class="bg-gray-100 text-gray-800 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3 text-left">Institución</th>
                            <th class="px-6 py-3 text-left">Título</th>
                            <th class="px-6 py-3 text-left">Nivel</th>
                            <th class="px-6 py-3 text-left">Área de Estudio</th> <!-- ✅ Nuevo campo -->
                            <th class="px-6 py-3 text-left">Inicio</th>
                            <th class="px-6 py-3 text-left">Finalización</th>
                            <th class="px-6 py-3 text-center">Promedio</th> <!-- ✅ Nuevo campo -->
                            <th class="px-6 py-3 text-center">En curso</th>
                            <th class="px-6 py-3 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($educaciones as $edu)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-medium">{{ $edu->institucion }}</td>
                                <td class="px-6 py-4">{{ $edu->titulo }}</td>
                                <td class="px-6 py-4">{{ $edu->nivel_educativo }}</td>
                                <td class="px-6 py-4">{{ $edu->area_estudio ?? '—' }}</td> <!-- ✅ Campo área -->
                                <td class="px-6 py-4">
                                    {{ $edu->fecha_inicio ? \Carbon\Carbon::parse($edu->fecha_inicio)->format('Y-m-d') : '—' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $edu->fecha_graduacion ? \Carbon\Carbon::parse($edu->fecha_graduacion)->format('Y-m-d') : '—' }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{ $edu->promedio ? number_format($edu->promedio, 2) : '—' }}
                                </td> <!-- ✅ Campo promedio -->
                                <td class="px-6 py-4 text-center">
                                    @if($edu->en_curso)
                                        <span class="px-2 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Sí</span>
                                    @else
                                        <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded-full text-xs font-semibold">No</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-center flex justify-center space-x-2">
                                    <a href="{{ route('candidates.education.edit', [$candidate->id, $edu->id]) }}"
                                       class="px-3 py-1 bg-yellow-500 text-white rounded-md text-xs font-semibold hover:bg-yellow-600 transition">
                                        Editar
                                    </a>
                                    <form action="{{ route('candidates.education.destroy', [$candidate->id, $edu->id]) }}"
                                          method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este registro?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-3 py-1 bg-red-600 text-white rounded-md text-xs font-semibold hover:bg-red-700 transition">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</x-app-layout>
