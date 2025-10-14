<x-app-layout>
@section('title', 'Candidate Profile')

<div class="max-w-5xl mx-auto mt-10 bg-white rounded-lg shadow p-8">

    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">
            {{ $candidate->nombre }} {{ $candidate->apellido }}
        </h2>
        <a href="{{ route('candidates.index') }}"
           class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md font-semibold hover:bg-gray-300 transition">
           ← Back to Candidates
        </a>
    </div>

    {{-- Basic Information --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700 mb-8">
        <p><strong>Email:</strong> {{ $candidate->email }}</p>
        <p><strong>Phone:</strong> {{ $candidate->telefono }}</p>
        <p><strong>City:</strong> {{ $candidate->ciudad }}</p>
        <p><strong>Country:</strong> {{ $candidate->pais }}</p>
        <p><strong>Status:</strong> {{ $candidate->estado }}</p>
        <p><strong>Preferred Mode:</strong> {{ $candidate->modalidad_preferida ?? '—' }}</p>
    </div>

    {{-- DOCUMENTS --}}
    <div class="mb-10">
        <h3 class="text-lg font-semibold mb-3 flex items-center gap-1">📄 Documents</h3>
        @forelse ($candidate->documentos as $doc)
            <div class="border p-4 rounded-lg mb-4 bg-gray-50 shadow-sm hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div class="space-y-1 text-gray-700">
                        <p><strong>Type:</strong> {{ $doc->tipo_documento ?? 'N/A' }}</p>
                        <p><strong>File:</strong>
                            @if($doc->url_archivo)
                                <a href="{{ asset('storage/' . $doc->url_archivo) }}" target="_blank" class="text-blue-600 hover:underline">
                                    {{ $doc->nombre_archivo ?? 'View Document' }}
                                </a>
                            @else
                                <span class="text-gray-500">No file uploaded</span>
                            @endif
                        </p>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('candidates.documents.edit', [$candidate->id, $doc->id]) }}"
                           class="px-4 py-1 bg-yellow-500 text-white rounded-md text-xs font-semibold hover:bg-yellow-600 transition">✏️ Edit</a>
                        <form action="{{ route('candidates.documents.destroy', [$candidate->id, $doc->id]) }}"
                              method="POST" onsubmit="return confirm('Are you sure you want to delete this document?')">
                            @csrf @method('DELETE')
                            <button type="submit"
                                    class="px-4 py-1 bg-red-600 text-white rounded-md text-xs font-semibold hover:bg-red-700 transition">🗑 Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No documents uploaded.</p>
        @endforelse

        <a href="{{ route('candidates.documents.create', $candidate->id) }}"
           class="inline-flex items-center mt-3 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition">
            ➕ Add new document
        </a>
    </div>

    {{-- WORK EXPERIENCE --}}
    <div class="mb-10">
        <h3 class="text-lg font-semibold mb-3 flex items-center gap-1">💼 Work Experience</h3>
        @forelse ($candidate->experiencias as $exp)
            <div class="border p-4 rounded-lg mb-4 bg-gray-50 shadow-sm hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div class="space-y-1 text-gray-700">
                        <p class="font-semibold text-gray-900">{{ $exp->empresa }}</p>
                        <p class="text-sm text-gray-600">{{ $exp->cargo }}</p>
                        <p class="text-sm text-gray-500">
                            {{ $exp->fecha_inicio ? $exp->fecha_inicio->format('d/m/Y') : '' }} –
                            {{ $exp->fecha_fin ? $exp->fecha_fin->format('d/m/Y') : ($exp->actualmente_trabaja ? 'Present' : '—') }}
                        </p>
                        <p class="text-sm text-gray-700 mt-1">{{ $exp->descripcion }}</p>
                        @if($exp->salario)
                            <p class="text-sm"><strong>Salary:</strong> ${{ number_format($exp->salario, 2) }}</p>
                        @endif
                        @if($exp->logros)
                            <p class="text-sm"><strong>Achievements:</strong> {{ $exp->logros }}</p>
                        @endif
                        @if($exp->referencias)
                            <p class="text-sm"><strong>References:</strong> {{ $exp->referencias }}</p>
                        @endif
                    </div>
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('candidates.experiences.edit', [$candidate->id, $exp->id]) }}"
                           class="px-4 py-1 bg-yellow-500 text-white rounded-md text-xs font-semibold hover:bg-yellow-600 transition">✏️ Edit</a>
                        <form action="{{ route('candidates.experiences.destroy', [$candidate->id, $exp->id]) }}"
                              method="POST" onsubmit="return confirm('Are you sure you want to delete this experience?')">
                            @csrf @method('DELETE')
                            <button type="submit"
                                    class="px-4 py-1 bg-red-600 text-white rounded-md text-xs font-semibold hover:bg-red-700 transition">🗑 Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No work experience recorded.</p>
        @endforelse

        <a href="{{ route('candidates.experiences.create', $candidate->id) }}"
           class="inline-flex items-center mt-3 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition">
            ➕ Add work experience
        </a>
    </div>

    {{-- EDUCATION --}}
    <div class="mb-10">
        <h3 class="text-lg font-semibold mb-3 flex items-center gap-1">🎓 Education</h3>
        @forelse ($candidate->educaciones as $edu)
            <div class="border p-4 rounded-lg mb-4 bg-gray-50 shadow-sm hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div class="space-y-1 text-gray-700">
                        <p class="font-semibold text-gray-900">{{ $edu->titulo }}</p>
                        <p>{{ $edu->institucion }}</p>
                        <p class="text-sm text-gray-500">{{ $edu->fecha_inicio }} – {{ $edu->fecha_graduacion ?? 'In progress' }}</p>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('candidates.education.edit', [$candidate->id, $edu->id]) }}"
                           class="px-4 py-1 bg-yellow-500 text-white rounded-md text-xs font-semibold hover:bg-yellow-600 transition">✏️ Edit</a>
                        <form action="{{ route('candidates.education.destroy', [$candidate->id, $edu->id]) }}"
                              method="POST" onsubmit="return confirm('Are you sure you want to delete this education record?')">
                            @csrf @method('DELETE')
                            <button type="submit"
                                    class="px-4 py-1 bg-red-600 text-white rounded-md text-xs font-semibold hover:bg-red-700 transition">🗑 Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No education registered.</p>
        @endforelse

        <a href="{{ route('candidates.education.create', $candidate->id) }}"
           class="inline-flex items-center mt-3 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition">
            ➕ Add new education
        </a>
    </div>

    {{-- COMPETENCIES --}}
    <div class="mb-8">
        <h3 class="text-lg font-semibold mb-3 flex items-center gap-1">🧠 Competencies</h3>
        @forelse ($candidate->competencias as $comp)
            <div class="border p-4 rounded-lg mb-4 bg-gray-50 shadow-sm hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div class="space-y-1 text-gray-700">
                        <p class="text-gray-900 font-semibold text-base">
                            {{ $comp->nombre }}
                            <span class="text-sm text-gray-500">({{ $comp->categoria }})</span>
                        </p>
                        @if ($comp->descripcion)
                            <p class="text-sm text-gray-600 italic">{{ $comp->descripcion }}</p>
                        @endif
                        <p class="text-sm text-gray-700">
                            <strong>Current level:</strong> {{ $comp->pivot->nivel_actual ?? '—' }} /
                            <strong>Max level:</strong> {{ $comp->nivel_maximo ?? '—' }}
                        </p>
                        <p class="text-sm text-gray-700"><strong>Experience:</strong> {{ $comp->pivot->años_experiencia ?? 0 }} years</p>
                        <p class="text-sm text-gray-700"><strong>Certification:</strong> {{ $comp->pivot->certificacion ?? '—' }}</p>
                        <p class="text-xs text-gray-500">
                            Last updated: {{ $comp->pivot->fecha_ultima_actualizacion ?? 'N/A' }}
                        </p>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <a href="{{ route('candidates.competencias.edit', [$candidate->id, $comp->id]) }}"
                           class="px-4 py-1 bg-yellow-500 text-white rounded-md text-xs font-semibold hover:bg-yellow-600 transition">✏️ Edit</a>
                        <form action="{{ route('candidates.competencias.destroy', [$candidate->id, $comp->id]) }}"
                              method="POST" onsubmit="return confirm('Are you sure you want to delete this competency?')">
                            @csrf @method('DELETE')
                            <button type="submit"
                                    class="px-4 py-1 bg-red-600 text-white rounded-md text-xs font-semibold hover:bg-red-700 transition">🗑 Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No competencies registered.</p>
        @endforelse

        <a href="{{ route('candidates.competencias.create', $candidate->id) }}"
           class="inline-flex items-center mt-3 px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition">
            ➕ Add new competency
        </a>
    </div>

</div>
</x-app-layout>
